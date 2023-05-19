@extends('layouts.adminF')

@section('content')
    <div class="padding">
        <div class="box-header">
            <h2><i class="fa fa-map-marker"></i> Add Contact </h2>
        </div>
        <form action="{{ url('/admin/store-contact') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="">address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">email</label>
                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">map</label>
                    <input type="text" class="form-control" name="map" placeholder="Map">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">facebook</label>
                    <input type="text" class="form-control" name="facebook" placeholder="Facebook">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">shopee</label>
                    <input type="text" class="form-control" name="shopee" placeholder="Shopee">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">lazada</label>
                    <input type="text" class="form-control" name="lazada" placeholder="Lazada">
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
                            <select class="form-control" name="status">
                                <option>โปรดเลือก</option></option>
                                <option value="Enabled" {{ (old('status', $contact->status) == 'Enabled')? 'selected' : '' }} >เปิดใช้งาน</option>
                                <option value="Disabled" {{ (old('status', $contact->status) == 'Disabled')? 'selected' : '' }} >ปิดใช้งาน</option>
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
@endsection
