@extends('layouts.adminF')

@section('content')
    <div class="padding">
        <div class="box-header">
            <h2><i class="material-icons">&#xe896;</i> Add Logos</h2>
            <small>เพิ่มโลโก้</small>
        </div>
        <form action="{{ url('/admin/store-logo') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-md-12 mb-3 form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Logo company">
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Uploads Photo Logo Top (เพิ่มรูป โลโก้ด้านบน)</label>
                    <input type="file" name="logo_top" class="form-control">
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Uploads Photo Logofooter (โลโก้ด้านล่าง)</label>
                    <input type="file" name="logo_footer" class="form-control">
                </div>
            </div>
                <div class="col-md-12 form-group">
                    <button type="submit" class="btn btn-fw primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
