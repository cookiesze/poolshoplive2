@extends('layouts.adminF')

@section('content')

<div class="padding">
    <div class="box">
      <div class="box-header">
        <div class="row m-b">
            <div class="col-sm-4 m-b-sm">
                <h2><i class="material-icons">&#xe3e8;</i> Logos</h2>
                <small>โลโก้บริษัท</small>
            </div>
            <!--
            <div class="col-sm-8 text-sm-right">
                <a type="button" href="{{ url('/admin/create-logo') }}" class="btn btn-sm primary">
                    <i class="fa fa-plus m-r-xs"></i> Add News
                </a>
            </div>
        -->
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
                <th>Logo top</th>
                <th><i class="fa fa-circle"></i>Logo footer</th>
                <th><i class="fa fa-edit"></i> Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($logos as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td><img src="{{ asset('assets/uploads/logo/'.$item->logo_top) }}" class="cate-image"alt="Image here" stlye=></td>
                <td><img src="{{ asset('assets/uploads/logo/'.$item->logo_footer) }}" class="cate-image"alt="Image here" stlye=></td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{ url('/admin/edit-logo/'.$item->id) }}"><i class="fa fa-gears"></i>  แก้ไข</a>
                </td>
            </tr>
            @endforeach
            <!-- .modal -->
          </tbody>
        </table>
        {{$logos->links('pagination::bootstrap-4')}}
      </div>
    </div>
</div>

@endsection
