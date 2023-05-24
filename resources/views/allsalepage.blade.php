@extends('layouts.sale')

@section('content')
<head>
    <meta charset="UTF-8">
    <title>All Salepage</title>


    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

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
        <span>ตัวแทน</span>
        <h1 style="font-weight: 500;">Poolshop</h1><br>
        <img src="{{ asset('assets/uploads/avatar/') }}/{{ $user->avatar }}" class="rounded-circle" width="200px" alt="">
    </div>
</div>

<div class="col-md-12">
    <div class="title-s2 text-center">
        <br>
        <span>สวัสดีค่ะ ฉันชื่อ</span>
        <h1 style="font-weight: 500;">{{ $user->fname }} {{ $user->sname }} </h1><br>
        <a  href="{{ $user->line }}" target="_blank"><img src="{{ asset('assets/onsite/button-line-new.png') }}" href="{{ $user->line }}" class="" width="400px;" style="padding-bottom: 20px;" alt=""></a>
        <a  href="tel:{{ $user->phone }}" target="_blank"><img src="{{ asset('assets/onsite/Artboard 1.png') }}" class="" width="400px" alt=""  style="padding-bottom: 20px;"></a>
    </div>
    
</div>

<div class="col-md-12">
    <div class="title-s2 text-center">
        <br>
        <h1 style="font-weight: 500;">เซลล์เพจ</h1><br>
    </div>
</div>

<div class="col-md-12">
    <div class="title-s2 text-center">
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 14px;" href="{{ url('/salepagepromotion') }}/{{ $user->member }}" target="_blank" role="button">Poolshop Promotion</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 14px; " href="{{ url('/salepagefoam') }}/{{ $user->member }}" target="_blank" role="button">24 plus Facial Wash</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 14px; " href="{{ url('/salepagesunscreen') }}/{{ $user->member }}" target="_blank" role="button">24 plus Sunscreen PA+++</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 14px; " href="{{ url('/salepageserum') }}/{{ $user->member }}" target="_blank" role="button">24 PLUS White Protect Serum</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 14px; " href="{{ url('/salepageheokkaetione') }}/{{ $user->member }}" target="_blank" role="button">Heokkaetione Complex</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 14px; " href="{{ url('/salepageamino') }}/{{ $user->member }}" target="_blank" role="button">A.G. Amino Powder</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 14px; " href="{{ url('/salepagepreif') }}/{{ $user->member }}" target="_blank" role="button">Plantein Complex Powder</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 14px; " href="{{ url('/salepagelotion') }}/{{ $user->member }}" target="_blank" role="button">CANNLAB Perfume Hand & Body Lotion</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 14px; " href="{{ url('/salepagebutter') }}/{{ $user->member }}" target="_blank" role="button">CANNLAB Perfume Hand & Body Butter</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 14px; " href="{{ url('/salepageshampoo') }}/{{ $user->member }}" target="_blank" role="button">CANNLAB Intensive Natural Hair Shampoo</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 14px; " href="{{ url('/salepageshower') }}/{{ $user->member }}" target="_blank" role="button">CANNLAB Natural Cleansing Shower Gel</a>
        <a class="btn btn-block btn-primary form-control" style="background-color:#fff; color:rgb(252, 59, 91); font-size: 14px; " href="{{ url('/salepageinherb') }}/{{ $user->member }}" target="_blank" role="button">INHERB เสริฟร้อน เพื่อคุณ</a>
    </div>
</div>

<br>


@endsection
