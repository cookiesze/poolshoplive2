@extends('layouts.sale')

@section('content')
<head>
    <meta charset="UTF-8">
    <title>Cannlab Lotion</title>


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


<div class="col-md-12">
    <div class="title-s2 text-center">
        
        <img src="{{ asset('assets/onsite/cannlab/lotion/Cannlab3-01.png') }}">
        <img src="{{ asset('assets/onsite/cannlab/lotion/Cannlab3-02.png') }}">
        <img src="{{ asset('assets/onsite/cannlab/lotion/Cannlab3-03.png') }}">


    </div>
</div>
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
<br>


@endsection
