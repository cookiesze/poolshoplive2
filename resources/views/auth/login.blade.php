


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-md-6">
                <img src="./Login #7_files/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                <div class="row justify-content-center">

                            <div class="mb-4">
                            <h3>กรุณาเข้าสู่ระบบ</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group first">
                                    <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="d-flex mb-5 align-items-center">

                                    <div class="control__indicator"></div>
                                </label>

                                </div>
                                <div class="col-md-12">
                                </div>
                            <button class="btn btn-block btn-primary form-control" type="submit" value="Log In" role="button" style="background-color:rgb(252, 59, 91); color:white; ">เข้าสู่ระบบ</button><br><br>
                            <a class="btn btn-block btn-primary form-control" href="{{ route('register') }}" role="button">Register</a>
                            </div>   
                        </form>                  
                </div>
        </div>
    </div>
</div>
@endsection
