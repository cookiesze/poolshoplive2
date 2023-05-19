@extends('layouts.adminF')
@section('content')
    <div class="padding">
        <div class="box-header">
            <h2><i class="material-icons">&#xe3e8;</i> Edit News</h2>
            <small>แก้ไขข่าว</small>
        </div>
        <form action="{{ url('/admin/update-post/'.$post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-6 mb-3 form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" value="{{ $post->title }}" name="title" placeholder="ชื่อข่าว" value="{{old('title')}}">
                @error('title')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3 form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" value="{{ $post->slug }}" name="slug" @error('slug') border-red-500 @enderror placeholder="ชื่อข่าว" value="{{old('slug')}}">
                @error('slug')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">Small Description</label>
                <input type="text" class="form-control" value="{{ $post->small_description }}" name="small_description" @error('small_description') border-red-500 @enderror placeholder="อธิบายรายละเอียดแบบย่อ" value="{{old('small_description')}}">
                @error('small_description')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">Description</label>
                <textarea name="description" rows="3" class="form-control" placeholder="อธิบายรายละเอียดแบบเต็ม">{{ $post->description }}</textarea>
                @error('description')
                <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group ">
                <label for="">Tag</label>
                    <div class="col-md-12 mb-3 form-group">
                    <p>Tags ที่ใข้งานอยู่:</p>
                        @foreach ($post->tags as $arr)
                        {{ $arr->name }},
                        @endforeach
                    </div>
                    <select name="tags[]" class="form-control selectpicker" multiple>
                        @foreach($tags as $key => $tag)
                            <option value="{{ $tag->id }}"
                                @if(old('tags'))
                                    {{ in_array($tag->id,old('tags'))? 'selected' : ''  }}
                                @else
                                    {{ $post->hasTag($tag->name)? 'selected' : '' }}
                                @endif
                            >
                                {{ $tag->name }}
                            </option>
                        @endforeach

                    </select>
                </label>
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">Meta Title</label>
                <input type="text" class="form-control" value="{{ $post->meta_title }}" name="meta_title" @error('meta_title') border-red-500 @enderror placeholder="อธิบายรายละเอียดชื่อข่าว" value="{{old('meta_title')}}">
                @error('meta_title')
                <div class="text-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="">Meta Description</label>
                <input type="text" class="form-control" value="{{ $post->meta_description }}" name="meta_description" @error('meta_description') border-red-500 @enderror placeholder="อธิบายรายละเอียดชื่อข่าว" value="{{old('meta_description')}}">
                @error('meta_description')
                <div class="meta_description-sm text-red-600"></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3 form-group togglebutton">
                <label>Status (สถานะเปิดใช้)<br>
                    @if ($post->status =='Enabled')
                        สถานะตอนนี้ <span class="label success" title="Active">Active</span>
                        @else
                        สถานะตอนนี้ <span class="label" title="Disabled">Disabled</span>
                    @endif
                </label>
                <div class="togglebutton">
                    <label>
                        <select class="form-control" name="status">
                            <option value="Enabled" {{ (old('status', $post->status) == 'Enabled')? 'selected' : '' }} >เปิดใช้งาน</option>
                            <option value="Disabled" {{ (old('status', $post->status) == 'Disabled')? 'selected' : '' }} >ปิดใช้งาน</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="col-md-12">
                @if ($post->cover)
                    <img src="{{ asset('assets/uploads/news/cover/'.$post->cover) }}" class="edit-image" alt="">
                @endif
            </div>
            <div class="col-md-12 form-group">
                <label for="">Uploads Photo Cover (เพิ่มรูปหน้าปกข่าว)</label><br>
                <input type="file" name="cover" class="form-control cate-img">
            </div>
            <div class="col-md-12 mb-3 form-group">
                <p>Images:</p>
                @if (count($post->images)>0)
                     @foreach ($post->images as $img)
                        <img src="/assets/uploads/news/images/{{ $img->image }}" class="cate-img" style="max-height: 100px; max-width: auto;" alt="" srcset="">
                     @endforeach
                @endif
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label class="form-label" for="inputImage">Select Images:</label>
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
            <div class="col-md-12 mb-3 form-group">
                <button type="submit" class="btn btn-fw primary">Submit</button>
            </div>
        </form>
        <div class="col-lg-6 mb-3 form-group">
            <div class="row m-b">
                <div class="col-sm-4 m-b-sm">
                    <h5>ลบรูปเพิ่มเติม</h5>
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
                        @foreach ($post->images as $img)
                        <tr>
                            <td>{{ $img->id }}</td>
                            <td><img src="/assets/uploads/news/images/{{ $img->image }}" class=" cate-image" style="max-width: 200px; max-width: auto;" alt="" srcset=""></td>
                            <td> {{ $img->image }}</td>
                            <td>
                                <form action="/admin/delete_image/{{ $img->id }}" method="post">
                                    <button class="btn btn-sm danger">ลบ</button>
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

<!--
        <div class="col-xs-3 col-sm-12 col-md-3 col-0">
            @if (count($post->images)>0)
                @foreach ($post->images as $img)
            <div class="box">
                <div class="item">
                    <img src="/assets/uploads/news/images/{{ $img->image }}" class="w-full">
                </div>
                <div class="p-a">
                    <div class="m-b h-2x"><a href class="_800"></a></div>
                    <p class="h-3x"><td> {{ $img->image }}</td></p>
                    <form action="/deleteimage/{{ $img->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn text-danger">X</button>
                    </form>
                </div>
            </div>
            <option value="{{ $tag->id }}" @if($tag->id == old('tags')) selected @endif>{{ $tag->name }}</option>
            @endforeach
            @endif
        </div>



    </div>
-->
@endsection


