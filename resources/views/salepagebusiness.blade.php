@extends('layouts.sale')

@section('content')

<head>
    <title>Salepage นักธุรกิจ</title>

</head>
<div class="col-md-12">
    <div class="title-s2 text-center">
        <img src="{{ asset('assets/onsite/salrpage-01.jpg') }}">
        <img src="{{ asset('assets/onsite/salrpage-02.jpg') }}">

    </div>
</div>
<div class="col-md-12"><br>
    <div class="title-s2 text-center">
        <span>Poolstar</span>
        <h1 style="font-weight: 500;">นักธุรกิจ</h1><br>
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
<div class="col-md-12">
    <div class="title-s2 text-center">
        <a  href="https://register.poolstarofficial.com/site/login" target="_blank"><img src="{{ asset('assets/onsite/salrpage-03.jpg') }}"></a>
    </div>
</div>

@endsection
