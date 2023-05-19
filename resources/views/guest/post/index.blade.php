@extends('layouts.frontend')

@section('content')

<section class="breadcrumb-area style2" style="background-image: url(/frontend/images/resources/breadcrumb-bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>News</span>
                        <h1 style="font-weight: 500;">ข่าวสาร - กิจกรรม</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog-area" class="blog-large-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <div class="blog-post">
                    @foreach($post as $arr)
                    <!--Start Single blog Post style4-->
                    <div class="single-blog-post style4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="{{ asset('assets/uploads/news/cover/'.$arr->cover) }}" alt="Awesome Image">
                            <div class="overlay-style-two"></div>
                            <div class="overlay">
                                <div class="box">
                                    <div class="link-icon">
                                        <a href="{{ url('/guest/show-post/'.$arr->slug) }}"><span class="icon-link1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><a href="{{ url('/guest/show-post/'.$arr->slug) }}">{{ $arr->title }}</a></h3>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>By <a href="#">admin</a></li>
                                    <li>เผยแพร่เมื่อ <a>{{ $arr->created_at->diffForHumans() }}</a></li>
                                </ul>
                            </div>
                            <div class="text">
                                <p>{{$arr->small_description }}</p>
                            </div>
                            <div class="button">
                                <a class="btn-one" href="{{ url('/guest/show-post/'.$arr->slug) }}">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End Single blog Post style4-->
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="post text-center">
                            <li>{{ $post->appends(['search_title' => old('search_title')])->links() }}</li>
                        </ul>
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
                                                <a href="{{ url('/guest/show-post/'.$item->slug) }}"><span class="icon-link"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <span>{{ $item->created_at->diffForHumans() }}</span>
                                    <h5 class="post-title"><a href="{{ url('/guest/show-post/'.$item->slug) }}">{{ $item->title }}</a></h5>
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
