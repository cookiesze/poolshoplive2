@extends('layouts.adminF')

@section('content')

<div class="padding">
    <div class="box">
      <div class="box-header">
        <div class="row m-b">
            <div class="col-sm-4 m-b-sm">
                <h2><i class="material-icons " viewBox="0 0 48 48">&#xe906;</i> Tags News</h2>
                <small>แท็กข่าวสารทั้งหมด</small>
            </div>
            <div class="col-sm-8 text-sm-right">
                <a type="button" href="{{ url('/admin/create-tags') }}" class="btn btn-sm primary">
                    <i class="fa fa-plus m-r-xs"></i> Add Tags
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
              <th><i class="fa fa-tags"></i> Name Tags</th>
              <th><i class="fa fa-space-shuttle"></i>  Slug</th>
              <th><i class="fa fa-edit"></i> Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tags as $arr)
            <tr>
                <td>{{ $arr->id }}</td>
                <td> {{ $arr->name }}</td>
                <td> {{ $arr->slug }}</td>
                <td><a class="btn btn-sm btn-info" href="{{ url('/admin/edit-tags/'.$arr->id) }}"><i class="fa fa-gears"></i> แก้ไข</a>
                  <!--
                    <a class="btn btn-white btn-round btn-just-icon delete-confirm" href="{{ url('delete-tags/'.$arr->id) }}">
                        <i class="material-icons dp48">delete_sweep</i>
                    </a>
                  -->
                </td>
            </tr>
            @endforeach
            <!-- .modal -->
          </tbody>
        </table>
        {{ $tags->links() }}
      </div>
    </div>
</div>
@endsection
