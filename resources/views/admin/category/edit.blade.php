@extends('layouts.adminF')

@section('content')
<div class="padding">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="material-icons">&#xe429;</i> Edit Categories Products</h2>
                <small>แก้ไขหมวดหมู่สินค้า</small>
            </div>
            <div class="box-divider m-a-0"></div>
                <div class="box-body">
                    <form action="{{ url('/admin/update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Name</label>
                                <input type="text" value="{{ $category->name }}" class="form-control" name="name">
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Slug</label>
                                <input type="text" value="{{ $category->slug }}" class="form-control" name="slug" >
                            </div>
                            <div class="col-md-12 mb-3 form-group">
                                <label for="">Description</label>
                                <textarea name="description" rows="3" class="form-control" >{{ $category->description }}</textarea>
                            </div>
                            <div class="col-md-6 mb-3 form-group togglebutton">
                                <label>Status (สถานะเปิดใช้)<br>
                                    @if ($category->status =='Enabled')
                                        สถานะตอนนี้ <span class="label success" title="Active">Active</span>
                                        @else
                                        สถานะตอนนี้ <span class="label" title="Disabled">Disabled</span>
                                    @endif
                                </label>
                                <div class="togglebutton">
                                    <label>
                                        <select class="form-control" name="status">
                                            <option value="Enabled" {{ (old('status', $category->status) == 'Enabled')? 'selected' : '' }} >เปิดใช้งาน</option>
                                            <option value="Disabled" {{ (old('status', $category->status) == 'Disabled')? 'selected' : '' }} >ปิดใช้งาน</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3 form-group ">
                                <label for="">Meta Title</label>
                                <input type="text" value="{{ $category->slug }}" class="form-control" name="meta_title" >
                            </div>
                            <div class="col-md-12 mb-3 form-group ">
                                <label for="">Meta Description</label>
                                <input type="text" value="{{ $category->meta_description }}"  class="form-control" name="meta_description">
                            </div>
                            <div class="col-md-12">
                                @if ($category->image)
                                    <img src="{{ asset('assets/uploads/category/'.$category->image) }}" class="edit-image" alt="">
                                @endif
                            </div>
                            <div class="col-md-12 mb-3 form-group">
                                    <label for="">Uploads Photo Cover (เพิ่มรูปหน้าปกข่าว)</label><br>
                                    <input type="file" name="image" class="form-control cate-img">
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
