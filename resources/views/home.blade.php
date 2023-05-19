@extends('layouts.members')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="padding">
            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="box ">
                        <div class="box-tool">
                            <ul class="nav">
                                <li class="nav-item inline dropdown">
                                    <a class="nav-link text-muted" data-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons md-18" style="color :yellow" ></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-scale pull-right dark">
                                        <a class="dropdown-item" href="{{ url('/user/edit/') }}/{{ Auth::user()->id }}" style="color: black"><i class="fa fa-gears"></i> แก้ไข</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="p-a-md text-center" style="background: url('assets/onsite/cotoe-01.jpg'); background-size: 100% 100%;">
                            <img src="{{ asset('assets/onsite/crown.png') }}" class="text-center img-circle" style="width: 24px">
                            <p class="text-center"><img src="{{ asset('assets/uploads/avatar/') }}/{{ Auth::user()->avatar }}" class="img-circle" style="width: 60px"></p>

                            <a href="" class="text-md block text-center" style="color: white"> {{ Auth::user()->fname }} {{ Auth::user()->sname }}</a>
                            <p class="text-center" style="color: white"><small>{{ Auth::user()->member }}</small></p>
                            <br>
                        </div>
                        <div class="row no-gutter b-t">
                            <div class="col-xs-4 b-r">
                                <a class="p-a block text-center" href="{{ Auth::user()->line }}" target="_blank">
                                    <img src="{{ asset('assets/onsite/LINE_APP_iOS.png') }}" class="img-circle" style="width: 42px">
                                </a>
                            </div>
                            <div class="col-xs-4 b-r">
                                <a  href="{{ Auth::user()->link }}" target="_blank" class="p-a block text-center">
                                    Register
                                    <br><i class="fa fa-external-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-xs-4">
                        <div class="box ">
                            <div class="p-a-md">
                                - ภาพโปรโมท
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="box ">
                            <div class="p-a-md">
                                - รูปสินค้า
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="box ">
                            <div class="p-a-md">
                                - คลังวิดีโอ
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="box ">
                            <div class="p-a-md">
                                - แคบชั่น
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="box ">
                            <div class="p-a-md">
                                - กรอบ Artwork
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="box ">
                            <div class="p-a-md">
                                - Presentation
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="box ">
                            <div class="p-a-md">
                                - รูปทริปท่องเที่ยว
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="box ">
                            <div class="p-a-md">
                                - Salepage
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="box ">
                            <div class="p-a-md">
                                - อื่นๆ
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="padding">
                <div class="box">
                    <div class="col-md-12" style="background-color: white;">
                        <br>
                            <a href="{{ url('/salepagebusiness') }}/{{ Auth::user()->member }}" target="_blank"> <img style="width: 100%" src="https://crm.theicongroup.co.th/files/link%20vip/salepage_vip2_1.png?_t=1676453678g"></a>
                            <br>
                            <div class="button-group" style="display: flex;margin-top: 2px;">
                                    <input  class="form-control" id="myInput" value="{{ url('/salepagebusiness') }}/{{ Auth::user()->member }}"><input style="margin-left: 10px; margin-right: 10px;" onclick="copyToClipboard(value))" type="button" id="myInput" class="btn btn-info" value="Copy!">
                            </div>
                                <script>
                                    function copyToClipboard(value) {
                                    document.getElementById(myInput).select();
                                    document.execCommand('copy');
                                    }
                                </script>
                            <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="padding">
                <div class="box">
                    <div class="col-md-12" style="background-color: white;">
                        <br>
                            <a href="{{ url('/salepageall') }}/{{ Auth::user()->member }}" target="_blank"> <img style="width: 100%" src="https://crm.theicongroup.co.th/files/link%20vip/salepage_vip2_1.png?_t=1676453678g"></a>
                            <br>
                            <div class="button-group" style="display: flex;margin-top: 2px;">
                                    <input  class="form-control" id="myInput" value="{{ url('/salepageall') }}/{{ Auth::user()->member }}"><input style="margin-left: 10px; margin-right: 10px;" onclick="copyToClipboard(value))" type="button" id="myInput" class="btn btn-info" value="Copy!">
                            </div>
                                <script>
                                    function copyToClipboard(value) {
                                    document.getElementById(myInput).select();
                                    document.execCommand('copy');
                                    }
                                </script>
                            <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="padding">
                <div class="box">
                    <div class="col-md-12" style="background-color: white;">
                        <br>
                            <a href="{{ url('/biopool') }}/{{ Auth::user()->member }}" target="_blank"> <img style="width: 100%" src="https://crm.theicongroup.co.th/files/link%20vip/salepage_vip2_1.png?_t=1676453678g"></a>
                            <br>
                            <div class="button-group" style="display: flex;margin-top: 2px;">
                                    <input  class="form-control" id="myInput" value="{{ url('/biopool') }}/{{ Auth::user()->member }}"><input style="margin-left: 10px; margin-right: 10px;" onclick="copyToClipboard(value))" type="button" id="myInput" class="btn btn-info" value="Copy!">
                            </div>
                                <script>
                                    function copyToClipboard(value) {
                                    document.getElementById(myInput).select();
                                    document.execCommand('copy');
                                    }
                                </script>
                            <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="padding">
                <div class="box">
                    <div class="col-md-12" style="background-color: white;">
                        <br>
                            <a href="{{ url('/biopool') }}/{{ Auth::user()->member }}" target="_blank"> <img style="width: 100%" src="https://crm.theicongroup.co.th/files/link%20vip/salepage_vip2_1.png?_t=1676453678g"></a>
                            <br>
                            <div class="button-group" style="display: flex;margin-top: 2px;">
                                    <input  class="form-control" id="myInput" value="{{ url('/biopool') }}/{{ Auth::user()->member }}"><input style="margin-left: 10px; margin-right: 10px;" onclick="copyToClipboard(value))" type="button" id="myInput" class="btn btn-info" value="Copy!">
                            </div>
                                <script>
                                    function copyToClipboard(value) {
                                    document.getElementById(myInput).select();
                                    document.execCommand('copy');
                                    }
                                </script>
                            <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="padding">
                <div class="box">
                    <div class="col-md-12" style="background-color: white;">
                        <br>
                            <a href="{{ url('/cannlab') }}/{{ Auth::user()->member }}" target="_blank"> <img style="width: 100%" src="https://crm.theicongroup.co.th/files/link%20vip/salepage_vip2_1.png?_t=1676453678g"></a>
                            <br>
                            <div class="button-group" style="display: flex;margin-top: 2px;">
                                    <input  class="form-control" id="myInput" value="{{ url('/cannlab') }}/{{ Auth::user()->member }}"><input style="margin-left: 10px; margin-right: 10px;" onclick="copyToClipboard(value))" type="button" id="myInput" class="btn btn-info" value="Copy!">
                            </div>
                                <script>
                                    function copyToClipboard(value) {
                                    document.getElementById(myInput).select();
                                    document.execCommand('copy');
                                    }
                                </script>
                            <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="padding">
                <div class="box">
                    <div class="col-md-12" style="background-color: white;">
                        <br>
                            <a href="{{ url('/inherb') }}/{{ Auth::user()->member }}" target="_blank"> <img style="width: 100%" src="https://crm.theicongroup.co.th/files/link%20vip/salepage_vip2_1.png?_t=1676453678g"></a>
                            <br>
                            <div class="button-group" style="display: flex;margin-top: 2px;">
                                    <input  class="form-control" id="myInput" value="{{ url('/inherb') }}/{{ Auth::user()->member }}"><input style="margin-left: 10px; margin-right: 10px;" onclick="copyToClipboard(value))" type="button" id="myInput" class="btn btn-info" value="Copy!">
                            </div>
                                <script>
                                    function copyToClipboard(value) {
                                    document.getElementById(myInput).select();
                                    document.execCommand('copy');
                                    }
                                </script>
                            <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
