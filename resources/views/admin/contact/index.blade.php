@extends('layouts.adminF')

@section('content')

<div class="padding">
        <div class="box-header">
            <div class="row m-b">
                <div class="col-sm-4 m-b-sm">
                    <h2><i class="fa fa-map-marker"></i> Contacts</h2>
                </div>
                <div class="col-sm-8 text-sm-right">
                    <a type="button" href="{{ url('/admin/create-contact') }}" class="btn btn-sm primary">
                        <i class="fa fa-plus m-r-xs"></i> Add Contacts
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
              { mData: 'address' },
              { mData: 'action' }
            ]
          }" class="table table-striped b-t b-b">
          <thead>
            <tr role="row">
              <th>ID</th>
              <th>Name</th>
              <th><i class="fa fa-circle"></i> Status</th>
              <th><i class="fa fa-map-marker"></i> Address</th>
              <th><i class="fa fa-facebook-square"></i> Facebook</th>
              <th><i class="fa fa-edit"></i> Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($contact as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ Str::limit($item->name,50) }}</td>
                <td>
                    @if ($item->status =='Enabled')
                    <span class="label success" title="Active">Active</span>
                @else
                <span class="label" title="Disabled">Disabled</span>
                @endif
                </td>
                <td>{{ Str::limit($item->address,50) }}</td>
                <td>{{ Str::limit($item->facebook,50) }}</td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{ url('/admin/edit-contact/'.$item->id) }}"><i class="fa fa-gears"></i> แก้ไข</a>
                    <a class="btn btn-sm danger" href="{{ url('/admin/delete-contact/'.$item->id) }}" onclick="return confirm('คุณต้องการลบข้อมูลนี้จริงหรือไม่?');"><i class="fa fa-times-circle"></i> Delete</a>
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

