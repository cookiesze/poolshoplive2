@extends('layouts.adminF')
@section('content')
    <div class="padding">
        <div class="box-header">
            <h2><i class="material-icons">&#xe3e8;</i> Add News</h2>
            <small>เพิ่มข่าวสาร</small>
        </div>
        <form action="{{ url('/admin/store-post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6 mb-3 form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" placeholder="ชื่อข่าว" value="{{old('title')}}">
                @error('title')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3 form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug" @error('slug') border-red-500 @enderror placeholder="ชื่อข่าว" value="{{old('slug')}}">
                @error('slug')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">Small Description</label>
                <input type="text" class="form-control" name="small_description" @error('small_description') border-red-500 @enderror placeholder="เนื้อหาแบบย่อ" value="{{old('small_description')}}">
                @error('small_description')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">Description</label>
                <textarea name="description" rows="3" class="form-control" placeholder="อธิบายรายละเอียดข่าวทั้งหมด">{{old('description')}}</textarea>
                @error('description')
                <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group ">
                <label for="">Tag</label>
                    <select name="tags[]" class="form-control selectpicker" multiple>
                        @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">Meta-title</label>
                <input type="text" class="form-control" name="meta_title" @error('meta_title') border-red-500 @enderror placeholder="ชื่อข่าวอีกครั้ง" value="{{old('meta_title')}}">
                @error('meta_title')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">Meta-Description</label>
                <input type="text" class="form-control" rows="3" name="meta_description" @error('meta_description') border-red-500 @enderror placeholder="รายละเอียดข่าวอีกครั้งแบบย่อ" value="{{old('meta_description')}}">
                @error('meta_description')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3 form-group togglebutton">
                <label>Status (สถานะเปิดใช้)</label>
                <div class="togglebutton">
                    <label>

                        <select class="form-control " name="status">
                            <option>โปรดเลือก</option></option>
                            <option value="Enabled" {{ (old('status', ) == 'Enabled')? 'selected' : '' }} >เปิดใช้งาน</option>
                            <option value="Disabled" {{ (old('status', $post->status) == 'Disabled')? 'selected' : '' }} >ปิดใช้งาน</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <label for="">Uploads Photo Cover (เพิ่มรูปหน้าปกข่าว)</label><br>
                <input type="file" name="cover" class="form-control cate-img">
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label class="form-label" for="inputImage">เลือกรูปในเนื้อหาข่าวแบบที่ละหลายรูป:</label>
                <input
                    type="file"
                    name="images[]"
                    id="inputImage"
                    multiple
                    class="form-control @error('images') is-invalid @enderror">

                @error('images')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group" style="margin-bottom: 5em">
                <button type="submit" class="btn btn-fw primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
