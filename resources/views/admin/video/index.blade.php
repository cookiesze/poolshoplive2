@extends('layouts.adminF')

@section('content')

<div class="padding">
    <div class="box">
      <div class="box-header">
        <div class="row m-b">
            <div class="col-sm-4 m-b-sm">
                <h2><i class="fa fa-youtube-play"></i> Videos</h2>
                <small>วีดีโอทั้งหมด</small>
            </div>
            <div class="col-sm-8 text-sm-right">
                <a type="button" href="{{ url('/admin/create-video') }}" class="btn btn-sm primary">
                    <i class="fa fa-plus m-r-xs"></i> Add Videos
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
              <th>Name Videos</th>
              <th><i class="fa fa-youtube-play"></i> Link</th>
              <th><i class="fa fa-edit"></i> Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($video as $arr)
            <tr>
                <td>{{ $arr->id }}</td>
                <td> {{ $arr->name }}</td>
                <td> {{ $arr->link }}</td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{ url('/admin/edit-video/'.$arr->id) }}"><i class="fa fa-gears"></i>  แก้ไข</a>
                    <a class="btn btn-sm danger" href="{{ url('/admin/delete-video/'.$arr->id) }}" onclick="return confirm('คุณต้องการลบข้อมูลนี้จริงหรือไม่?');"><i class="fa fa-times-circle"></i> Delete</a>
                </td>
            </tr>
            @endforeach
            <!-- .modal -->
          </tbody>
        </table>
        {{ $video->links() }}
      </div>
    </div>
</div>
@endsection
