@extends('layouts.frontend')

@section('content')

<section class="breadcrumb-area style2" style="background-image: url(/frontend/images/resources/breadcrumb-bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>ข่าวสาร - กิจกรรม</span>
                        <h1 style="font-weight: 500;">{{ $post->title }}</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
ิ<br><br><br>
<section id="blog-area" class="blog-single-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <div class="blog-post">
                    <div class="single-blog-post">
                        <div class="main-image-box">
                            <img src="{{ asset('assets/uploads/news/cover/'.$post->cover) }}" alt="Awesome Image">
                        </div>
                        <div class="col-xl-12">
                            <div class="single-post-info-content text-center">
                                <h1 class="blog-title">{{ $post->title }}</h1>
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li>By <a href="#">Admin</a></li>
                                        <li>On <a href="#">{{ $post->created_at->diffForHumans() }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="top-text-box">
                            <p>{!! $post->description !!}</p>

                        </div>
                        <div class="tag-with-social-links-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="inner-content clearfix">
                                        <div class="tag-box pull-left">
                                            <p>Tags:</p>
                                            <ul>
                                                @foreach($post->tags as $key => $arr)
                                                <li><a href="{{ url('guest/tags',['tag' => $arr->name]) }}">{{ $arr->name }},</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    <!--
                                        <div class="social-links-box pull-right">
                                            <p><i class="fa fa-share-alt-square" aria-hidden="true"></i>Share this post:</p>
                                            <ul class="sociallinks fix">
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Start prev next option-->
                        <!--End prev next option-->
                    </div>
                </div>
            </div>

            <!--Start sidebar Wrapper-->
            <div class="col-xl-3 col-lg-4 col-md-7 col-sm-12">
                <div class="sidebar-wrapper">
                    <div class="sidebar-search-box">
                        <form action="{{ url('/guest/post/') }}" method="GET" class="input-wrapper input-wrapper-inline">
                            <input type="text" class="form-control" placeholder="ค้นหาข่าว" name="search_name" value="{{ old('search_name') }}" required>
                            <button type="submit" class="btn btn-search"><i class="w-icon-search"></i></button>
                        </form>
                    </div>
                    <!--Start single sidebar-->
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="sidebar-title">
                            <div class="title">Recent Post</div>
                        </div>
                        <ul class="recent-post">
                            @foreach ( $lasted_news as $item)
                            <li>
                                <div class="img-holder">
                                    <img style="height:60px; width:auto" src="{{ asset('assets/uploads/news/cover/'.$item->cover) }}" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><span class="icon-link"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <span>{{ $item->created_at->diffForHumans() }}</span>
                                    <h5 class="post-title"><a href="#">{{ $item->title }}</a></h5>
                                </div>

                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single-sidebar-->
                    <div class="single-sidebar tag-box clerfix">
                        <div class="sidebar-title">
                            <div class="title">Tags</div>
                        </div>
                        <ul class="popular-tag clearfix">
                            @foreach ($tag as $key => $arr )
                            <li><a class="tag" href="{{ url('guest/tags',['tag' => $arr->name]) }}">{{ $arr->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!--End single-sidebar-->
                </div>
            </div>
            <!--End Sidebar Wrapper-->
        </div>
    </div>

</section>











@endsection
