@extends('layouts.adminF')

@section('content')
    <div class="padding">
        <div class="box-header">
            <h2><i class="fa fa-map-marker"></i> Edit Contact</h2>
        </div>
        <form action="{{ url('/admin/update-contact/'.$contact->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3 form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="{{ $contact->name }}" name="name" placeholder="ชื่อ">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" value="{{ $contact->slug }}" name="slug" placeholder="ชื่อ">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">address</label>
                    <input type="text" class="form-control" value="{{ $contact->address }}" name="address" placeholder="ชื่อ">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">phone</label>
                    <input type="text" class="form-control" value="{{ $contact->phone }}" name="phone" placeholder="ชื่อ">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">email</label>
                    <input type="email" class="form-control" value="{{ $contact->email }}" name="email" placeholder="ชื่อ">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">map</label>
                    <input type="text" class="form-control" value="{{ $contact->map }}" name="map" placeholder="ชื่อ">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">facebook</label>
                    <input type="text" class="form-control" value="{{ $contact->facebook }}" name="facebook" placeholder="facebook">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">shopee</label>
                    <input type="text" class="form-control" value="{{ $contact->shopee }}" name="shopee" placeholder="shopee">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">lazada</label>
                    <input type="text" class="form-control" value="{{ $contact->lazada }}" name="lazada" placeholder="lazada">
                </div>
                <div class="col-md-6 mb-3 form-group togglebutton">
                    <label>Status (สถานะเปิดใช้)<br>
                        @if ($contact->status =='Enabled')
                            สถานะตอนนี้ <span class="label success" title="Active">Active</span>
                            @else
                            สถานะตอนนี้ <span class="label" title="Disabled">Disabled</span>
                        @endif
                    </label>
                    <div class="togglebutton">
                        <label>
                            <select class="form-control" name="status">
                                <option value="Enabled" {{ (old('status', $contact->status) == 'Enabled')? 'selected' : '' }} >เปิดใช้งาน</option>
                                <option value="Disabled" {{ (old('status', $contact->status) == 'Disabled')? 'selected' : '' }} >ปิดใช้งาน</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control" placeholder="อธิบายรายละเอียดแบบเต็ม">{{ $contact->description }}</textarea>
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
@endsection
