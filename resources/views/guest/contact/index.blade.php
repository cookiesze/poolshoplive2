@extends('layouts.frontend')

@section('content')



<section class="breadcrumb-area style2" style="background-image: url(/frontend/images/resources/breadcrumb-bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>contact</span>
                        <h1 style="font-weight: 500;">ติดต่อเรา</h1>
                        <h4 style="padding-bottom: 3em; color:aliceblue; font-weight: 200;" ></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="working-process-style2-area" style="background-image:url(images/parallax-background/working-process-bg-style3.jpg);">
    <div class="container">
        <div class="sec-title">
            <p>Google Map -> <a href="https://goo.gl/maps/eL9EVQSy4AjiQqGM7" target="_blank"  >คลื๊กที่นี่</a></p>
            <div class="title">{{ $contact_us->name }}</div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="working">
                    <div class="iframe-container">
                        <iframe src="{{ $contact_us->map }}" width="1169" height="516" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-style2-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="about-style2-text">
                    <div class="sec-title">
                        <p>About US</p>
                        <div class="title"><h1 style="font-size: 20px; font-weight: 700;" >{{ $contact_us->name }}</h1></div>
                    </div>
                    <div class="text">
                        <p><b>ตั้งอยู่ที่ :</b> {{ $contact_us->address }}</p>
                        <p><b>เบอร์โทร :</b> {{ $contact_us->phone }}</p>
                        <p><b>E-mail :</b> {{ $contact_us->email }}</p>
                        <b>facebook :</b> <a href="{{ $contact_us->facebook }}">GinolrGroup</a><br>
                        <b>Shopee :</b> <a href="{{ $contact_us->shopee }}">CT-Electricshop</a><br>
                        <b>Lazada :</b> <a href="{{ $contact_us->Lazada }}">CT-Electric</a>
                        <p><b>ข้อมูลเพิ่มเคิ่ม :</b> {!! $contact_us->description !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="about-style2-text">
                    <div class="sec-title">
                        <p>Contact US</p>
                        <div class="title"><h1 style="font-size: 20px; font-weight: 700;" >ติกต่อสอบภาม</h1></div>
                    </div>
                    <div class="text">
                        <form class="form contact-us-form" action="{{ url('/guest/contact-form') }}" method="post">
                            <div class="form-group">
                                <label for="name"><b>ชื่อ - นามสกุล</b></label>
                                <input type="text" id="name" name="name"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone"><b>เบอร์โทร</b></label>
                                <input type="text" id="phone" name="phone"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email"><b>อีเมล์</b></label>
                                <input type="email" id="email" name="email"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tilte"><b>ชื่อเรื่อง</b></label>
                                <input type="emtilteail" id="tilte" name="tilte"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description"><b>ข้อความ</b></label>
                                <textarea class="form-control" name="description" rows="5" placeholder="" required="" aria-required="true"></textarea>
                            </div>

                            <button type="submit" class=" btn-one btn-rounded">ส่งข้อความ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection
