@extends('layouts.adminF')

@section('content')
    <div class="padding">
        <div class="box-header">
            <h2><i class="fa fa-star"></i> Edit Brands</h2>
        </div>
        <form action="{{ url('/admin/update-brands/'.$brand->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3 form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="{{ $brand->name }}" name="name" placeholder="ชื่อ">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" value="{{ $brand->slug }}" name="slug" placeholder="ชื่อ">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">Small Description</label>
                    <input type="text" class="form-control" value="{{ $brand->small_description }}" name="small_description" placeholder="เนื้อหาแบบย่อ">
                </div>
                <div class="col-md-6 mb-3 form-group togglebutton">
                    <label>Status (สถานะเปิดใช้)<br>
                        @if ($brand->status =='Enabled')
                            สถานะตอนนี้ <span class="label success" title="Active">Active</span>
                            @else
                            สถานะตอนนี้ <span class="label" title="Disabled">Disabled</span>
                        @endif
                    </label>
                    <div class="togglebutton">
                        <label>
                            <select class="form-control" name="status">
                                <option value="Enabled" {{ (old('status', $brand->status) == 'Enabled')? 'selected' : '' }} >เปิดใช้งาน</option>
                                <option value="Disabled" {{ (old('status', $brand->status) == 'Disabled')? 'selected' : '' }} >ปิดใช้งาน</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">link</label>
                    <input type="text" class="form-control" value="{{ $brand->link }}" name="link" placeholder="ลิ้งที่ต้องการ">
                </div>
                <div class="col-md-12">
                    @if ($brand->cover)
                        <img src="{{ asset('assets/uploads/slideshow/'.$brand->cover) }}" class="edit-image" alt="">
                    @endif
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Uploads Photo Cover (เพิ่มรูปหน้าปกข่าว)</label><br>
                    <input type="file" name="cover" class="form-control cate-img">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <button type="submit" class="btn btn-fw primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
