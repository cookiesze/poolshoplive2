@extends('layouts.adminF')

@section('content')
<div class="padding">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="material-icons " viewBox="0 0 48 48">&#xe906;</i> Edit Tags</h2>
                <small>แก้ไขแท็ก</small>
            </div>
            <div class="box-divider m-a-0"></div>
                <div class="box-body">
                    <form action="{{ url('/admin/update-tags/'.$tag->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Name</label>
                                <input type="text" value="{{ $tag->name }}" class="form-control" name="name">
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Slug</label>
                                <input type="text" value="{{ $tag->slug }}" class="form-control" name="slug">
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
