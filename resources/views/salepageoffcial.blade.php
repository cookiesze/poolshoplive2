@extends('layouts.sale')

@section('content')
<head>
    <meta charset="UTF-8">
    <title>Official Salepage</title>


    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/text-animetion.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/assets/font-awesome/css/font-awesome.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('admin/theme/assets/material-design-icons/material-design-icons.css')}}" type="text/css" />
    <!-- Favicon -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<div class="col-md-12"><br>
    <div class="title-s2 text-center">
        <span>Official</span>
        <h1 style="font-weight: 500;">Poolstar</h1><br>
        <img src="{{ asset('assets/uploads/avatar/') }}/{{ $user->avatar }}" class="rounded-circle" width="200px" alt="">
    </div>
</div>

<div class="col-md-12">
    <div class="title-s2 text-center">
        <br>
        <span></span>
        <h1 style="font-weight: 500;">Admin Poolstar </h1><br>
        <a  href="{{ $user->line }}" target="_blank"><img src="{{ asset('assets/onsite/button-line-new.png') }}" href="{{ $user->line }}" class="" width="400px;" style="padding-bottom: 20px;" alt=""></a>
        <a  href="tel:{{ $user->phone }}" target="_blank"><img src="{{ asset('assets/onsite/Artboard 1.png') }}" class="" width="400px" alt=""  style="padding-bottom: 20px;"></a>
    </div>

    
</div>
<div class="col-md-12">
    <div class="title-s2 text-center">
        <br>
        <span></span>
        <h12 style="font-weight: 500;">Special Promotion</h12><br><br>
        <a  href="https://shopee.co.th/24plusofficial" target="_blank"><img style="width: 500px;"src="{{ asset('assets/onsite/promotion/1.png') }}"alt="24 plus Facial Wash"></a><br><br><br>
        <h12 style="font-weight: 500;">ซื้อ 24 plus Facial Wash ได้ที่นี่เลย </h12><br><br><br>
        <a  href="https://shopee.co.th/24plusofficial" target="_blank"><img  class="responsive"src="{{ asset('assets/onsite/shopee-button.gif') }}" alt="shopee"></a>

</div>

<div class="col-md-12">
    <div class="title-s2 text-center">
        <br>
        <h1 style="font-weight: 500;">เซลล์เพจ</h1><br>
    </div>
</div>

<div class="col-md-12">
    <div class="title-s2 text-center">
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 12px;" href="{{ url('/salepagepromotion') }}/{{ $user->member }}" target="_blank" role="button">Poolshop Promotion</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 12px; " href="{{ url('/salepagefoam') }}/{{ $user->member }}" target="_blank" role="button">24 plus Facial Wash</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 12px; " href="{{ url('/salepagesunscreen') }}/{{ $user->member }}" target="_blank" role="button">24 plus Sunscreen PA+++</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 12px; " href="{{ url('/salepageserum') }}/{{ $user->member }}" target="_blank" role="button">24 PLUS White Protect Serum</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 12px; " href="{{ url('/salepageheokkaetione') }}/{{ $user->member }}" target="_blank" role="button">Heokkaetione Complex</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 12px; " href="{{ url('/salepageamino') }}/{{ $user->member }}" target="_blank" role="button">A.G. Amino Powder</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 12px; " href="{{ url('/salepagepreif') }}/{{ $user->member }}" target="_blank" role="button">Plantein Complex Powder</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 12px; " href="{{ url('/salepagelotion') }}/{{ $user->member }}" target="_blank" role="button">CANNLAB Perfume Hand & Body Lotion</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 12px; " href="{{ url('/salepagebutter') }}/{{ $user->member }}" target="_blank" role="button">CANNLAB Perfume Hand & Body Butter</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 12px; " href="{{ url('/salepageshampoo') }}/{{ $user->member }}" target="_blank" role="button">CANNLAB Intensive Natural Hair Shampoo</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 12px; " href="{{ url('/salepageshower') }}/{{ $user->member }}" target="_blank" role="button">CANNLAB Natural Cleansing Shower Gel</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 12px; " href="{{ url('/salepageinherb') }}/{{ $user->member }}" target="_blank" role="button">INHERB เสริฟร้อน เพื่อคุณ</a>
    </div>
</div>

<br>


@endsection
