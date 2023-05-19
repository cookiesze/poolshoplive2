@extends('layouts.members')
@section('content')
    <div class="padding">
        <div class="box-header">
            <h2><i class="material-icons">&#xe3e8;</i> เพิ่มข้อมูลส่วนตัว</h2>
        </div>
        <form action="{{ url('/member/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6 mb-3 form-group">
                <label for="">ชื่อ</label>
                <input type="text" class="form-control" name="fname" placeholder="ชื่อ" value="{{old('fname')}}">
                @error('fname')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3 form-group">
                <label for="">นามสกุล</label>
                <input type="text" class="form-control" name="sname" placeholder="ชื่อ" value="{{old('sname')}}">
                @error('sname')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3 form-group">
                <label for="">Member Number (Poolstar)</label>
                <input type="text" class="form-control" name="slug" @error('slug') border-red-500 @enderror placeholder="Member Number (Poolstar)" value="{{old('slug')}}">
                @error('slug')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3 form-group">
                <label for="">เบอร์โทร</label>
                <input type="text" class="form-control" name="phone_number" @error('phone_number') border-red-500 @enderror placeholder="phone_number" value="{{old('phone_number')}}">
                @error('phone_number')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">Line link</label>
                <input type="text" class="form-control" name="line" @error('line') border-red-500 @enderror placeholder="ลิ้ง Line" value="{{old('line')}}">
                @error('line')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">Link Register</label>
                <input type="text" class="form-control" name="link_register" @error('link_register') border-red-500 @enderror placeholder="ลิ้ง Registor" value="{{old('link_register')}}">
                @error('link_register')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">E-mail</label>
                <input type="text" class="form-control" name="email" @error('email') border-red-500 @enderror placeholder="E-mail" value="{{old('email')}}">
                @error('email')
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
                            <option value="Disabled" {{ (old('status', $member->status) == 'Disabled')? 'selected' : '' }} >ปิดใช้งาน</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <label for="">Uploads Photo Cover (เพิ่มรูปหน้าปกข่าว)</label><br>
                <input type="file" name="cover" class="form-control cate-img">
            </div>
            <div class="col-md-12 mb-3 form-group" style="margin-bottom: 5em">
                <button type="submit" class="btn btn-fw primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
