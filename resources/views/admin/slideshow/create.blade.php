@extends('layouts.adminF')

@section('content')
    <div class="padding">
        <div class="box-header">
            <h2><i class="material-icons">&#xe8eb;
            </i> Add Slideshows </h2>
        </div>
        <form action="{{ url('/admin/store-slideshow') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="">Small Description</label>
                    <input type="text" class="form-control" name="small_description" placeholder="เนื้อหาแบบย่อ">
                </div>
                <div class="col-md-6 mb-3 form-group togglebutton">
                    <label>Status (สถานะเปิดใช้)</label>
                    <div class="togglebutton">
                        <label>
                            <select class="form-control" name="status">
                                <option>โปรดเลือก</option></option>
                                <option value="Enabled" {{ (old('status', $slideshow->status) == 'Enabled')? 'selected' : '' }} >เปิดใช้งาน</option>
                                <option value="Disabled" {{ (old('status', $slideshow->status) == 'Disabled')? 'selected' : '' }} >ปิดใช้งาน</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">link</label>
                    <input type="text" class="form-control" name="link" placeholder="ลิ้งที่ต้องการ">
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Uploads Photo (เพิ่มรูปหมวดหมู่)</label><br>
                    <input type="file" name="cover" class="form-control cate-img">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <button type="submit" class="btn btn-fw primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
