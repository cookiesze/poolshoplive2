@extends('layouts.adminF')

@section('content')
<div class="padding">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="fa fa-youtube-play"></i> Add Video</h2>
                <small>เพิ่มวีดีโอ</small>
            </div>
            <div class="box-divider m-a-0"></div>
                <div class="box-body">
                    <form action="{{ url('/admin/store-video') }}" method="POST" enctype="multipart/form-data">
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
                                <label for="">Link</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-youtube-play"></i></span>
                                    <input type="text" class="form-control" placeholder="Link Youtube" name="link" value="{{ old('url',$video->link) }}">
                                </div>
                            </div>
                            <div class="col-md-12 mb-3 form-group">
                                <label for="">เนื้อหาแบบย่อ</label>
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
                            <div class="col-md-6 mb-3 form-group togglebutton">
                                <label>Status (สถานะเปิดใช้)</label>
                                <div class="togglebutton">
                                    <label>
                                        <select class="form-control " name="status">
                                            <option>โปรดเลือก</option></option>
                                            <option value="Enabled" {{ (old('status', ) == 'Enabled')? 'selected' : '' }} >เปิดใช้งาน</option>
                                            <option value="Disabled" {{ (old('status', $video->status) == 'Disabled')? 'selected' : '' }} >ปิดใช้งาน</option>
                                        </select>
                                    </label>
                                </div>
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
