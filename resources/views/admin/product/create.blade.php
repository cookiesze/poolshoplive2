@extends('layouts.adminF')

@section('content')
    <div class="padding">
        <div class="box-header">
            <h2><i class="material-icons">&#xe896;</i> Add Products</h2>
            <small>เพิ่มสินค้า</small>
        </div>
        <form action="{{ url('/admin/store-products') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-md-12 mb-3 form-group">
                    <label for="">เลือกหมวดหมู่สินค้า</label>
                    <select class="form-control" name="category_id" id="category_id" required>
                        <option value="">โปรดเลือกหมวดหมู่</option>
                        @foreach ($category as $arr)
                            <option value="{{ $arr->id }}" {{ $arr->id === $arr->category_id ? 'selected' : '' }}>{{ $arr->name }}</option>
                            @if ($arr->children)
                                @foreach ($arr->children as $child)
                                    <option value="{{ $child->id }}" {{ $child->id === $arr->category_id ? 'selected' : '' }}>&nbsp;&nbsp;{{ $child->name }}</option>
                                @endforeach
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="ชื่อสินค้า">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="ชื่อสินค้า">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">Product Code</label>
                    <input type="text" class="form-control" name="product_code" placeholder="รหัสสินค้า">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">Barcode</label>
                    <input type="text" class="form-control" name="barcode" placeholder="บาร์โค้ด">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">Dimension กว้าง x ยาว x สูง</label>
                    <input type="text" class="form-control" name="dimension" @error('dimension') border-red-500 @enderror placeholder="ขนาด กว้าง x ยาว x สูง" value="{{old('dimension')}}">
                    @error('dimension')
                    <div class="text-sm text-red-600"></div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">ผลิตโดย</label>
                    <input type="text" class="form-control" name="made" @error('made') border-red-500 @enderror placeholder="เนื้อหาแบบย่อ" value="{{old('made')}}">
                    @error('made')
                    <div class="text-sm text-red-600"></div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label>สินค้า ภายใน - ภายนอก</label>
                    <div class="togglebutton">
                        <label>
                            <select class="form-control" name="use">
                                <option>โปรดเลือก</option></option>
                                <option value="Indoor">ภายใน</option>
                                <option value="Outdoor" >ภายนอก</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label>Status (สถานะเปิดใช้)</label>
                    <div class="togglebutton">
                        <label>
                            <select class="form-control" name="status">
                                <option>โปรดเลือก</option></option>
                                <option value="Enabled">เปิดใช้งาน</option>
                                <option value="Disabled" >ปิดใช้งาน</option>
                            </select>
                        </label>
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
                    <label for="">เนื้อหาแบบเต็ม</label>
                    <textarea name="description" rows="3" class="form-control" placeholder="อธิบายรายละเอียดสินค้าแบบเต็ม"></textarea>
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" name="meta_title" placeholder="ชื่อสินค้า">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">Meta Description</label>
                    <input type="text" class="form-control" name="meta_description" placeholder="อธิบายสินค้าและKeywords">
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Uploads Photo Dimension (เพิ่มรูป ขนาดสินค้า)</label>
                    <input type="file" name="image_dimension" class="form-control">
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Uploads Photo หน้าปก (เพิ่มรูปสินค้า)</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label class="form-label" for="inputImage">รูปเพิ่มเติม:</label>
                    <input
                        type="file"
                        name="etc[]"
                        id="inputImage"
                        multiple
                        class="form-control @error('etc') is-invalid @enderror">

                    @error('etc')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
                <div class="col-md-12 form-group">
                    <button type="submit" class="btn btn-fw primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
