@extends('layouts.members')
@section('content')
    <div class="padding">
        <div class="box-header">
            <h2><i class="material-icons">&#xe3e8;</i> แก้ไข ข้อมูลส่วนตัว Member {{ Auth::user()->member }}</h2>
        </div>
        <form action="{{ url('/user/update/') }}/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <div class="text-center">
                    <img src="{{ asset('assets/uploads/avatar/') }}/{{ Auth::user()->avatar }}" class="rounded " width="200px" alt="">
                </div>
            </div>
            <div class="col-md-12 form-group">
                <label for="">Uploads Photo Avatar</label><br>
                <input type="file" value="{{ Auth::user()->avatar }}" name="avatar" class="form-control rounded mx-auto d-block btn info" value="{{old('avatar')}}">
                @error('avatar')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <br>
            <div class="col-md-6 mb-3 form-group">
                <label for="">ชื่อ</label>
                <input type="text" class="form-control rounded mx-auto d-block" value="{{ Auth::user()->fname }}" name="fname" placeholder="ชื่อ" value="{{old('fname')}}">
                @error('fname')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3 form-group">
                <label for="">นามสกุล</label>
                <input type="text"class="form-control rounded mx-auto d-block" value="{{ Auth::user()->sname }}" name="sname" placeholder="นามสกุล" value="{{old('sname')}}">
                @error('sname')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3 form-group">
                <label for="">Member Number (Poolstar)</label>
                <input type="text" class="form-control rounded mx-auto d-block" value="{{ Auth::user()->member }}" name="slug" placeholder="Member Number (Poolstar)" value="{{old('slug')}}">
                @error('slug')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3 form-group">
                <label for="">เบอร์โทร</label>
                <input type="text" class="form-control rounded mx-auto d-block" value="{{ Auth::user()->phone }}" name="phone" placeholder="เบอร์โทร" value="{{old('phone')}}">
                @error('phone')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">Line link</label>
                <input type="text" class="form-control rounded mx-auto d-block" value="{{ Auth::user()->line }}" name="line" placeholder="Line" value="{{old('line')}}">
                @error('line')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">Link Register</label>
                <input type="text" class="form-control rounded mx-auto d-block" value="{{ Auth::user()->link }}" name="link" placeholder="link" value="{{old('link')}}">
                @error('link')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">E-mail</label>
                <input type="text" class="form-control rounded mx-auto d-block" value="{{ Auth::user()->email }}" name="email" placeholder="E-mail" value="{{old('email')}}">
                @error('email')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group" style="margin-bottom: 5em">
                <button type="submit" class="btn info">Submit</button>
            </div>
        </form>
    </div>
@endsection
