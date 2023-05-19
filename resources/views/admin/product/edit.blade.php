@extends('layouts.adminF')

@section('content')
    <div class="box-header">
        <h2><i class="material-icons">&#xe896;</i> Edit Product</h2>
        <small>แก้ไขสินค้า</small>
    </div>
    <div class="padding">
        <form action="{{ url('/admin/update-products/'.$products->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="">Add Category</label>
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
                    <input type="text" value="{{ $products->name }}" class="form-control" name="name">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">Slug</label>
                    <input type="text" value="{{ $products->slug }}" class="form-control" name="slug" placeholder="ชื่อสินค้า">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">รหัสสินค้า</label>
                    <input type="text" value="{{ $products->product_code }}" class="form-control" name="product_code" placeholder="รหัสสินค้า">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">บาร์โต้ด</label>
                    <input type="text" value="{{ $products->barcode }}" class="form-control" name="barcode" placeholder="บาร์โต้ด">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">Dimension กว้าง x ยาว x สูง</label>
                    <input type="text" value="{{ $products->dimension }}" class="form-control" name="dimension" placeholder="ขนาด กว้าง x ยาว x สูง">
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label for="">ผลิตโดย</label>
                    <input type="text" value="{{ $products->made }}" class="form-control" name="made" placeholder="ผลิตโดย">
                </div>
                <div class="col-md-6 mb-3 form-group togglebutton">
                    <label>ลักษณะสินค้า ภายใน - ภายนอก<br>
                        @if ($products->use =='Indoor')
                            สถานะตอนนี้ <span class="label success" title="Indoor">Indoor</span>
                            @else
                            สถานะตอนนี้ <span class="label" title="Outdoor">Outdoor</span>
                        @endif
                    </label>
                    <div class="togglebutton">
                        <label>
                            <select class="form-control" name="use">
                                <option value="Indoor" {{ (old('use', $products->use) == 'Indoor')? 'selected' : '' }} >ภายใน</option>
                                <option value="Outdoor" {{ (old('use', $products->use) == 'Outdoor')? 'selected' : '' }} >ภายนอก</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="col-md-6 mb-3 form-group togglebutton">
                    <label>Status (สถานะเปิดใช้)<br>
                        @if ($products->status =='Enabled')
                            สถานะตอนนี้ <span class="label success" title="Active">Active</span>
                            @else
                            สถานะตอนนี้ <span class="label" title="Disabled">Disabled</span>
                        @endif
                    </label>
                    <div class="togglebutton">
                        <label>
                            <select class="form-control" name="status">
                                <option value="Enabled" {{ (old('status', $products->status) == 'Enabled')? 'selected' : '' }} >เปิดใช้งาน</option>
                                <option value="Disabled" {{ (old('status', $products->status) == 'Disabled')? 'selected' : '' }} >ปิดใช้งาน</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">Small Description</label>
                    <textarea name="small_description"  rows="1" class="form-control" placeholder="อธิบายรายละเอียดสินค้าแบบย่อ">{{ $products->small_description }}</textarea>
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control" placeholder="อธิบายรายละเอียดสินค้าแบบเต็ม">{{ $products->small_description }}</textarea>
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" value="{{ $products->meta_title }}" name="meta_title" placeholder="ชื่อสินค้า">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="">Meta Description</label>
                    <input type="text" class="form-control" value="{{ $products->description }}" name="meta_description" placeholder="อธิบายสินค้าและKeywords">
                </div>
                <div class="col-md-12">
                    @if ($products->image_dimension)
                        <img src="{{ asset('assets/uploads/products/dimension/'.$products->image_dimension) }}" class="edit-image" alt="">
                    @endif
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Uploads Photo Cover (เพิ่มรูปหน้าปกข่าว)</label><br>
                    <input type="file" name="image_dimension" class="form-control cate-img">
                </div>
                <div class="col-md-12">
                    @if ($products->image)
                        <img src="{{ asset('assets/uploads/products/images/'.$products->image) }}" class="edit-image" alt="">
                    @endif
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Uploads Photo Cover (เพิ่มรูปหน้าปกข่าว)</label><br>
                    <input type="file" name="image" class="form-control cate-img">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <p>Images:</p>
                    @if (count($products->image_products)>0)
                         @foreach ($products->image_products as $img)
                            <img src="/assets/uploads/products/etc/{{ $img->image_etc }}" class="cate-img" style="max-height: 100px; max-width: auto;" alt="" srcset="">
                         @endforeach
                    @endif
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label class="form-label" for="inputImage">Select Images:</label>
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
                <div class="col-md-12 form-group">
                    <button type="submit" class="btn btn-fw primary">Submit</button>
                </div>
            </div>
        </form>
        <div class="col-lg-6 mb-3 form-group">
            <div class="row m-b">
                <div class="col-sm-4 m-b-sm">
                    <h5>ลบรูปเพิ่มเติมที่มี</h5>
                </div>
            </div>
                <div class="table-responsive">
                    <table ui-jp="dataTable" ui-options="{
                        sAjaxSource: 'api/datatable.json',
                        aoColumns: [
                        { mData: 'ID' },
                        { mData: 'name' },
                        { mData: 'status' },
                        { mData: 'images' },
                        { mData: 'action' }
                        ]
                    }" class="table table-striped b-t b-b">
                    <thead>
                        <tr role="row">
                        <th>ID</th>
                        <th>image</th>
                        <th>Name</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products->image_products as $img)
                        <tr>
                            <td>{{ $img->id }}</td>
                            <td><img src="/assets/uploads/products/etc/{{ $img->image_etc }}" class=" cate-image" style="max-width: 200px; max-width: auto;" alt="" srcset=""></td>
                            <td> {{ $img->image }}</td>
                            <td>
                                <form action="/admin/delete_image_product/{{ $img->id }}" method="post">
                                    <button class="btn text-danger">X</button>
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <!-- .modal -->
                    </tbody>
                    </table>
                </div>
    </div>
    </div>
@endsection
