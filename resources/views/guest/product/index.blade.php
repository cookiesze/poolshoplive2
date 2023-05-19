@extends('layouts.frontend')

@section('content')


<section class="breadcrumb-area style2" style="background-image: url(/frontend/images/resources/breadcrumb-bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12" style="padding-bottom: 20px">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Product</span>
                        <h1 style="font-weight: 500;">สินค้า</h1>
                        <h4 style="padding-bottom: 3em; color:aliceblue; font-weight: 200;" ></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="working-process-style2-area">
    <div class="container">
        <div class="row">
            @foreach($category as $items)
                <div class="col-md-12" style="padding-top: 5rem">
                    <div class="sec-title">
                        <p>Product</p>
                        <div class="title">{{ $items->name }}</div>
                    </div>
                </div>
                    @if($items->products)
                        @foreach($items->products as $product)
                            <div class="col-md-3 mb-3">
                                <a href=""></a>
                                <div class="title-holder text-center">
                                    <img style="width:220px;" src="{{ asset('assets/uploads/products/images/'.$product->image) }}" class="edit-image" alt="">
                                    <hr>
                                    <div class="static-content">
                                        <h3 class="title text-center"><a href="{{ url('/guest/product/'.$product->slug) }}">{{ $product->name }}</a></h3>
                                        <span><b>Code:</b> {{ $product->product_code }}</span>
                                        <p>{!! $product->slug !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <hr>
            @endforeach
        </div>
    </div>
</section>

@endsection
