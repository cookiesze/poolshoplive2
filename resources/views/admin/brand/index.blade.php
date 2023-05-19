@extends('layouts.adminF')

@section('content')

<div class="padding">
        <div class="box-header">
            <div class="row m-b">
                <div class="col-sm-4 m-b-sm">
                    <h2><i class="fa fa-star"></i> Brands</h2>
                </div>
                <div class="col-sm-8 text-sm-right">
                    <a type="button" href="{{ url('/admin/create-brands') }}" class="btn btn-sm primary">
                        <i class="fa fa-plus m-r-xs"></i> Add Brands
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
              <th><i class="fa fa-link"></i> Link</th>
              <th><i class="fa fa-edit"></i> Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($brand as $item)
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
                    <img src="{{ asset('assets/uploads/brand/'.$item->cover) }}" class="cate-image"alt="Image here" stlye=>
                </td>
                <td>{{ Str::limit($item->link,50) }}</td>

                <td>
                    <a class="btn btn-sm btn-info" href="{{ url('/admin/edit-brands/'.$item->id) }}"><i class="fa fa-gears"></i> แก้ไข</a>
                    <a class="btn btn-sm danger" href="{{ url('/admin/delete-brands/'.$item->id) }}" onclick="return confirm('คุณต้องการลบข้อมูลนี้จริงหรือไม่?');"><i class="fa fa-times-circle"></i> Delete</a>
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

