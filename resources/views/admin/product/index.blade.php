@extends('layouts.adminF')

@section('content')

<div class="padding">
    <div class="box">
      <div class="box-header">
        <div class="row m-b">
            <div class="col-sm-4 m-b-sm">
                <h2><i class="material-icons">&#xe896;</i> Products</h2>
                <small>สินค้าทั้งหมด</small>
            </div>
            <div class="col-sm-8 text-sm-right">
                <a type="button" href="{{ url('/admin/create-products') }}" class="btn btn-sm primary">
                    <i class="fa fa-plus m-r-xs"></i> Add Products
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
                <th>Name Product</th>
                <th><i class="fa fa-arrows"></i> Dimension</th>
                <th><i class="fa fa-university"></i> in - out</th>
                <th><i class="fa fa-circle"></i> status</th>
                <th><i class="material-icons">&#xe429;</i> Categories Products</th>
                <th><i class="fa fa-file-image-o"></i> Image</th>
                <th><i class="fa fa-edit"></i> Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $arr)
            <tr>
                <td>{{ $arr->id }}</td>
                <td> {{ $arr->name }}</td>
                <td> {{ $arr->dimension }}</td>
                <td>
                    @if ($arr->use =='Indoor')
                        <span class="label success" title="Indoor">Indoor</span>
                        @else
                        <span class="label" title="Outdoor">Outdoor</span>
                    @endif
                </td>
                <td>
                    @if ($arr->status =='Enabled')
                        <span class="label success" title="Active">Active</span>
                        @else
                        <span class="label" title="Disabled">Disabled</span>
                    @endif
                </td>
                <td>
                    {{ $arr->category->name }}
                </td>
                <td>
                    <img src="{{ asset('assets/uploads/products/images/'.$arr->image) }}" class="cate-image"alt="Image here" stlye=>
                </td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{ url('/admin/edit-products/'.$arr->id) }}"><i class="fa fa-gears"></i> แก้ไข</a>
                    <a class="btn btn-sm danger" href="{{ url('/admin/delete-products/'.$arr->id) }}" onclick="return confirm('คุณต้องการลบข้อมูลนี้จริงหรือไม่?');"><i class="fa fa-times-circle"></i> Delete</a>
                </td>
            </tr>
            @endforeach
            <!-- .modal -->
          </tbody>
        </table>
        {{$products->links('pagination::bootstrap-4')}}
      </div>
    </div>
</div>

@endsection
