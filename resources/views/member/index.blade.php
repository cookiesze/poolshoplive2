@extends('layouts.members')

@section('content')
<div class="padding">
    <div class="box">
      <div class="box-header">
        <div class="row m-b">
            <div class="col-sm-4 m-b-sm">
                <h2><i class="material-icons">&#xe3e8;</i>ข้อมูลสำหรับ Salepage</h2>
                <small>ข้อมูลส่วนตัว</small>
            </div>
            <div class="col-sm-8 text-sm-right">
                <a type="button" href="{{ url('/member/create') }}" class="btn btn-sm primary">
                    <i class="fa fa-plus m-r-xs"></i> เพิ่ม ข้อมูลส่วนตัว
                </a>
            </div>
        </div>
      </div>

      <div class="table-responsive">
        <table ui-jp="dataTable" ui-options="{
            sAjaxSource: 'api/datatable.json',
            aoColumns: [
              { mData: 'ID' },
              { mData: 'Name' },
              { mData: 'Member Number' },
              { mData: 'Cover'}
              { mData: 'Status'}
              { mData: 'Action' }
            ]
          }" class="table table-striped b-t b-b">
          <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th><i class="fa fa-circle"></i> Member Number</th>
                <!--
                <th><i class="fa fa-file-image-o"></i> Cover</th>
                 -->
                <th><i class="fa fa-file-image-o"></i> Status</th>
                <th><i class="fa fa-edit"></i> Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($member as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->fname }}</td>
                <td>{{ $item->slug }}</td>
                <!--
                <td><img src="{{ asset('assets/uploads/members/cover/'.$item->cover) }}" class="cate-image"alt="Image here" stlye=></td>
                -->
                <td>
                    @if ($item->status =='Enabled')
                        <span class="label success" title="Active">Active</span>
                        @else
                        <span class="label" title="Disabled">Disabled</span>
                    @endif
                </td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{ url('/member/edit/'.$item->id) }}"><i class="fa fa-gears"></i>  แก้ไข</a>
                    <a class="btn btn-sm danger" href="{{ url('/member/delete/'.$item->id) }}" onclick="return confirm('คุณต้องการลบข้อมูลนี้จริงหรือไม่?');"><i class="fa fa-times-circle"></i> Delete</a>
                </td>
            </tr>
            @endforeach
            <!-- .modal -->
          </tbody>
        </table>
        {{$member->links('pagination::bootstrap-4')}}
      </div>
    </div>
</div>
@endsection
