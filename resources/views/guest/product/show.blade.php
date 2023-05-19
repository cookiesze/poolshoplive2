@extends('layouts.frontend')


@section('content')

        <section id="shop-area" class="single-shop-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="shop-content">
                            <!--Start single shop content-->
                            <div class="single-shop-content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-product-image-holder">
                                            <img src="{{ asset('assets/uploads/products/images/'.$product->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="content-box">
                                            <span class="price">หมวดหมู่ {{ $product->category->name }}</span>
                                            <h2>{{ $product->name }}</h2>
                                            <div class="review-box">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half"></i></li>
                                                </ul>
                                            </div>
                                            <div class="">
                                                <p>
                                                    <strong>{{ $product->slug }}</strong> | <strong>CODE:</strong> {{ $product->product_code }}<br>
                                                    <strong>Dimension</strong> {{ $product->dimension }} | <strong>Barcode:</strong> {{ $product->barcode }}
                                                </p>
                                             </div>
                                            <div class="text">
                                                <p>{!! $product->small_description !!}</p>
                                            </div>
                                            <!--
                                            <div class="location-box">
                                                <p>Check Delivery Option at Your Location:</p>
                                                <form action="#">
                                                    <input type="text" placeholder="Pincode">
                                                    <button type="submit">Check</button><br/>
                                                </form>
                                                <span>Expected Delivery in 4-10 Days</span>
                                            </div>
                                            <div class="addto-cart-box">
                                                <input class="quantity-spinner" type="text" value="2" name="quantity">
                                                <button class="btn-one addtocart" type="submit">Add to Cart</button>
                                            </div>
                                            <div class="share-products-socials">
                                                <h5>Share This Product</h5>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook fb" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter tw" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest pin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin lin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single shop content-->
                            <!--Start product tab box-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="product-tab-box tabs-box">
                                        <ul class="tab-btns tab-buttons clearfix">
                                            <li data-tab="#desc" class="tab-btn active-btn"><span>Descriprion</span></li>
                                            <li data-tab="#picture" class="tab-btn"><span>Picture</span></li>
                                        </ul>
                                        <div class="tabs-content">
                                            <div class="tab active-tab" id="desc">
                                                <div class="product-details-content">
                                                    <div class="desc-content-box">
                                                        {!! $product->description !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab" id="picture">
                                                <div class="review-box-holder">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-3 form-group">
                                                            <p>Images:</p>
                                                            @if (count($product->image_products)>0)
                                                                 @foreach ($product->image_products as $img)
                                                                    <img src="/assets/uploads/products/etc/{{ $img->image_etc }}" class="cate-img" style="max-height: 300px; max-width: auto;" alt="" srcset="">
                                                                 @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End product tab box-->
                            <!--Start related product box-->
                            <div class="related-product">
                                <div class="shop-page-title">
                                    <div class="title">Raleted <span>Products</span></div>
                                </div>
                                <div class="row">
                                    <!--Start single product item-->
                                    @foreach($lasted_product as $arr)
                                        <div class="col-md-3 mb-3">
                                            <a href=""></a>
                                            <div class="title-holder text-center">
                                                <img style="width:220px;" src="{{ asset('assets/uploads/products/images/'.$arr->image) }}" class="edit-image" alt="">
                                                <hr>
                                                <div class="static-content">
                                                    <h3 class="title text-center"><a href="{{ url('/guest/product/'.$product->slug) }}">{{ $arr->name }}</a></h3>
                                                    <span><b>Code:</b> {{ $arr->product_code }}</span>
                                                    <p>{!! $arr->slug !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!--End related product box-->
                        </div>
                    </div>

                </div>
            </div>
        </section>

@endsection
