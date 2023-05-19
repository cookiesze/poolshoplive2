@extends('layouts.adminF')

@section('content')
    <div class="padding">
        <div class="box-header">
            <h2><i class="material-icons">&#xe429;</i> Add Categories Products</h2>
            <small>เพิ่มหมวดหมู่สินค้า</small>
        </div>
        <form action="{{ url('/admin/store-category') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-md-6 mb-3 form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="ชื่อหมวดหมู่">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="ชื่อหมวดหมู่อีกครั้งแบบไม่มีอักษรพิมพ์ใหญ่">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control" placeholder="อธิบายรายละเอียดหมวดหมู่"></textarea>
                </div>
                <div class="col-md-6 mb-3 form-group togglebutton">
                    <label>Status (สถานะเปิดใช้)</label>
                    <div class="togglebutton">
                        <label>
                            <select class="form-control" name="status">
                                <option>โปรดเลือก</option></option>
                                <option value="Enabled" {{ (old('status', $category->status) == 'Enabled')? 'selected' : '' }} >เปิดใช้งาน</option>
                                <option value="Disabled" {{ (old('status', $category->status) == 'Disabled')? 'selected' : '' }} >ปิดใช้งาน</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" name="meta_title" placeholder="ชื่อหมวดหมู่">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">Meta Description</label>
                    <input type="text" class="form-control" name="meta_description" placeholder="อธิบายหมวดหมู่และKeywords">
                </div>

                <div class="col-md-12 form-group">
                    <label for="">Uploads Photo (เพิ่มรูปหมวดหมู่)</label><br>
                    <input type="file" name="image" class="form-control cate-img">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <button type="submit" class="btn btn-fw primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
