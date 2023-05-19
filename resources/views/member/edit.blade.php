@extends('layouts.members')
@section('content')
    <div class="padding">
        <div class="box-header">
            <h2><i class="material-icons">&#xe3e8;</i> แก้ไข ข้อมูลส่วนตัว Member {{ $member->slug }}</h2>
        </div>
        <form action="{{ url('/member/update/'.$member->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-6 mb-3 form-group">
                <label for="">ชื่อ</label>
                <input type="text" class="form-control" value="{{ $member->fname }}" name="fname" placeholder="ชื่อ" value="{{old('fname')}}">
                @error('fname')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3 form-group">
                <label for="">นามสกุล</label>
                <input type="text" class="form-control" value="{{ $member->sname }}" name="sname" placeholder="นามสกุล" value="{{old('sname')}}">
                @error('sname')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3 form-group">
                <label for="">Member Number (Poolstar)</label>
                <input type="text" class="form-control" value="{{ $member->slug }}" name="slug" placeholder="Member Number (Poolstar)" value="{{old('slug')}}">
                @error('slug')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3 form-group">
                <label for="">เบอร์โทร</label>
                <input type="text" class="form-control" value="{{ $member->phone_number }}" name="phone_number" placeholder="เบอร์โทร" value="{{old('phone_number')}}">
                @error('phone_number')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">Line link</label>
                <input type="text" class="form-control" value="{{ $member->line }}" name="line" placeholder="Line" value="{{old('line')}}">
                @error('line')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">Link Register</label>
                <input type="text" class="form-control" value="{{ $member->link_register }}" name="link_register" placeholder="link_register" value="{{old('link_register')}}">
                @error('link_register')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">E-mail</label>
                <input type="text" class="form-control" value="{{ $member->email }}" name="email" placeholder="E-mail" value="{{old('email')}}">
                @error('email')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3 form-group togglebutton">
                <label>Status (สถานะเปิดใช้)<br>
                    @if ($member->status =='Enabled')
                        สถานะตอนนี้ <span class="label success" title="Active">Active</span>
                        @else
                        สถานะตอนนี้ <span class="label" title="Disabled">Disabled</span>
                    @endif
                </label>
                <div class="togglebutton">
                    <label>
                        <select class="form-control" name="status">
                            <option value="Enabled" {{ (old('status', $member->status) == 'Enabled')? 'selected' : '' }} >เปิดใช้งาน</option>
                            <option value="Disabled" {{ (old('status', $member->status) == 'Disabled')? 'selected' : '' }} >ปิดใช้งาน</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="col-md-12">
                @if ($member->cover)
                    <img src="{{ asset('assets/uploads/members/cover/'.$member->cover) }}" class="edit-image" alt="">
                @endif
            </div>
            <div class="col-md-12 form-group">
                <label for="">Uploads Photo Cover (เพิ่มรูปหน้าปกข่าว)</label><br>
                <input type="file" name="cover" class="form-control cate-img">
            </div>
            <br>
            <div class="col-md-12 mb-3 form-group" style="margin-bottom: 5em">
                <button type="submit" class="btn btn-fw primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
