@extends('layouts.adminF')

@section('content')

<div class="padding">
        <div class="box-header">
            <div class="row m-b">
                <div class="col-sm-4 m-b-sm">
                    <h2><i class="material-icons">&#xe429;</i> Categories Products</h2>
                    <small>หมวดหมู่สินค้าทั้งหมด</small>
                </div>
                <div class="col-sm-8 text-sm-right">
                    <a type="button" href="{{ url('/admin/create-category') }}" class="btn btn-sm primary">
                        <i class="fa fa-plus m-r-xs"></i> Add Categories
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
            <tr role="row">
              <th>ID</th>
              <th>Name</th>
              <th><i class="fa fa-circle"></i> Status</th>
              <th><i class="fa fa-file-image-o"></i> Images</th>
              <th><i class="fa fa-edit"></i> Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($category as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td> {{ $item->name }}</td>
                <td>
                    @if ($item->status =='Enabled')
                    <span class="label success" title="Active">Active</span>
                @else
                <span class="label" title="Disabled">Disabled</span>
                @endif
                </td>
                <td>
                    <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="cate-image"alt="Image here" stlye=>
                </td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{ url('/admin/edit-category/'.$item->id) }}"><i class="fa fa-gears"></i> แก้ไข</a>
                    <!--<a class="btn btn-sm danger" href="{{ url('/admin/delete-category/'.$item->id) }}">ลบ</a> -->
                </td>
            </tr>
            @endforeach
            <!-- .modal -->
          </tbody>
        </table>
      </div>
    </div>
</div>

@endsection
