@extends('layouts.frontend')

@section('content')



<section class="breadcrumb-area style2" style="background-image: url(/frontend/images/resources/breadcrumb-bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12" style="padding-bottom: 20px">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Category</span>
                        <h1 style="font-weight: 500;">{{$category->name }}</h1>
                        <h4 style="padding-bottom: 3em; color:aliceblue; font-weight: 200;" ></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container" style="padding-top: 3em;" >
    <div class="col-md-12">
        <div class="row">
            @foreach ( $Product as $arr )
            <div class="col-md-4 mb-3">
                <a href="{{ url('guest/view-catery/'.$cate->slug) }}"></a>
                <div class="card text-end" style="width: 18rem;">
                    <img style="height: 300px" src="{{ asset('assets/uploads/products/'.$arr->image) }}" class="edit-image" alt="">
                    <hr>
                    <div class="card-body">
                        <h5>{{$arr->name}}</h5>
                        <p>{{ $arr->small_description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>




@endsection
