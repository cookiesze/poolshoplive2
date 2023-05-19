@extends('layouts.adminF')

@section('content')
    <div class="box-header">
        <h2><i class="material-icons">&#xe896;</i> Edit Logos</h2>
        <small>แก้ไขLogo</small>
    </div>
    <div class="padding">
        <form action="{{ url('/admin/update-logo/'.$logo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12 mb-3 form-group">
                    <label for="">Name</label>
                    <input type="text" value="{{ $logo->name }}" class="form-control" name="name">
                </div>
                <div class="col-md-12">
                    @if ($logo->logo_top)
                        <img src="{{ asset('assets/uploads/logo/'.$logo->logo_top) }}" class="edit-image" alt="">
                    @endif
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Uploads LOGO Top</label><br>
                    <input type="file" name="logo_top" class="form-control cate-img">
                </div>
                <div class="col-md-12">
                    @if ($logo->logo_footer)
                        <img src="{{ asset('assets/uploads/logo/'.$logo->logo_footer) }}" class="edit-image" alt="">
                    @endif
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Uploads LOGO footer</label><br>
                    <input type="file" name="logo_footer" class="form-control cate-img">
                </div>
                <div class="col-md-12 form-group">
                    <button type="submit" class="btn btn-fw primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
