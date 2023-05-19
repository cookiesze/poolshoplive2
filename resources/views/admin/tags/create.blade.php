@extends('layouts.adminF')

@section('content')
<div class="padding">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="material-icons " viewBox="0 0 48 48">&#xe906;</i> Add Tags</h2>
                <small>เพิ่มแท็ก</small>
            </div>
            <div class="box-divider m-a-0"></div>
                <div class="box-body">
                    <form action="{{ url('/admin/store-tags') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="ชื่อ">
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" name="slug" placeholder="ชื่อ">
                            </div>
                            <div class="col-md-12 mb-3 form-group">
                                <button type="submit" class="btn btn-fw primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
