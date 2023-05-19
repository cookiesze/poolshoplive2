@extends('layouts.adminF')

@section('content')
<div class="padding">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="fa fa-youtube-play"></i> Edit Videos</h2>
                <small>แก้ไขแท็ก</small>
            </div>
            <div class="box-divider m-a-0"></div>
                <div class="box-body">
                    <form action="{{ url('/admin/update-video/'.$video->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" value="{{ $video->name }}" name="name" placeholder="ชื่อ">
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" value="{{ $video->slug }}" name="slug" placeholder="ชื่อ">
                            </div>
                            <div class="col-md-12 mb-3 form-group">
                                <div style="margin-bottom:15px;" class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item img-thumbnail" src="{{ Str::replace('.be/','be.com/embed/',$video->link) }}" allowfullscreen></iframe>
                                </div>

                                <label>URL <span class="text-danger">*</span></label>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-youtube-play"></i></span>
                                    <input type="text" class="form-control" name="link" value="{{ old('url',$video->link) }}">
                                </div>

                                <div class="text-danger">@error('url'){{ $message }}@enderror</div>
                            </div>
                            <div class="col-md-6 mb-3 form-group togglebutton">
                                <label>Status (สถานะเปิดใช้)<br>
                                    @if ($video->status =='Enabled')
                                        สถานะตอนนี้ <span class="label success" title="Active">Active</span>
                                        @else
                                        สถานะตอนนี้ <span class="label" title="Disabled">Disabled</span>
                                    @endif
                                </label>
                                <div class="togglebutton">
                                    <label>
                                        <select class="form-control" name="status">
                                            <option value="Enabled" {{ (old('status', $video->status) == 'Enabled')? 'selected' : '' }} >เปิดใช้งาน</option>
                                            <option value="Disabled" {{ (old('status', $video->status) == 'Disabled')? 'selected' : '' }} >ปิดใช้งาน</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3 form-group">
                                <label for="">Small Description</label>
                                <input type="text" class="form-control" value="{{ $video->small_description }}" name="small_description" @error('small_description') border-red-500 @enderror placeholder="อธิบายรายละเอียดแบบย่อ" value="{{old('small_description')}}">
                                @error('small_description')
                                <div class="text-sm text-red-600"></div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3 form-group">
                                <label for="">Description</label>
                                <textarea name="description" rows="3" class="form-control" placeholder="อธิบายรายละเอียดแบบเต็ม">{{ $video->description }}</textarea>
                                @error('description')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
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
