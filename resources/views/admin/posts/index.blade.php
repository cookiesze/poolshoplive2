@extends('layouts.adminF')

@section('content')

<div class="padding">
    <div class="box">
      <div class="box-header">
        <div class="row m-b">
            <div class="col-sm-4 m-b-sm">
                <h2><i class="material-icons">&#xe3e8;</i> News</h2>
                <small>ข่าวสารทั้งหมด</small>
            </div>
            <div class="col-sm-8 text-sm-right">
                <a type="button" href="{{ url('/admin/create-post') }}" class="btn btn-sm primary">
                    <i class="fa fa-plus m-r-xs"></i> Add News
                </a>
            </div>
        </div>
      </div>

      <div class="table-responsive">
        <table ui-jp="dataTable" ui-options="{
            sAjaxSource: 'api/datatable.json',
            aoColumns: [
              { mData: 'ID' },
              { mData: 'name' },
              { mData: 'status' },
              { mData: 'images' },
              { mData: 'action' }
            ]
          }" class="table table-striped b-t b-b">
          <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th><i class="fa fa-circle"></i> Status</th>
                <th><i class="fa fa-tags"></i> Tags</th>
                <th><i class="fa fa-file-image-o"></i> Cover</th>
                <th><i class="fa fa-edit"></i> Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>
                    @if ($item->status =='Enabled')
                        <span class="label success" title="Active">Active</span>
                        @else
                        <span class="label" title="Disabled">Disabled</span>
                    @endif
                </td>
                <td>
                    @foreach ($item->tags as $tag)
                    {{ $tag->name }}
                    @endforeach
                </td>
                <td><img src="{{ asset('assets/uploads/news/cover/'.$item->cover) }}" class="cate-image"alt="Image here" stlye=></td>

                <td>
                    <a class="btn btn-sm btn-info" href="{{ url('/admin/edit-post/'.$item->id) }}"><i class="fa fa-gears"></i>  แก้ไข</a>
                    <a class="btn btn-sm danger" href="{{ url('/admin/delete-post/'.$item->id) }}" onclick="return confirm('คุณต้องการลบข้อมูลนี้จริงหรือไม่?');"><i class="fa fa-times-circle"></i> Delete</a>
                </td>
            </tr>
            @endforeach
            <!-- .modal -->
          </tbody>
        </table>
        {{$posts->links('pagination::bootstrap-4')}}
      </div>
    </div>
</div>

@endsection
