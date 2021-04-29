@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top:50px ;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="">
                    <div class="card-header">

                        <img src="main/images/login.png" width="150" alt="" style="margin-left: 320px !important; margin-top: 0px;">
                    </div>
                    <!-- <div class="card-header" style="background-color: rgb(255, 255, 255) !important;">{{ __('Login') }}</div> -->

                    <div class="card-body" style="padding: 40px 40px !important; padding-left: 70px !important;">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row"> 
                                <label for="email"
                                       class="col-md-2 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6" >
                                    <input id="email" type="email" style="height: calc(1.4em + 1.1rem + 2px) !important;font-size: 1rem !important; border: none !important; border-radius: 0% !important;width: 500px !important; "
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class=" col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" style="height: calc(1.4em + 1.1rem + 2px) !important;font-size: 1rem !important; border: none !important; border-radius: 0% !important;width: 500px !important;background-color:re!important;  "
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           >

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

      

                            <div class="form-group row mb-0">
                                <div class="d-grid gap-2 col-3 mx-auto">
                                    <button type="submit" class="btn btn-primary " style="background-color: #ff0000 !important; border: none !important; border-radius: 0% !important; padding: 8px 80px !important; margin-top: 10px !important;">
                                        {{ __('Login') }}
                                    </button>
                                    
                                    
                                </div>
                            </div>
                        </form>
                        <div style="margin-left: 200px ; margin-top: 10px;" >you don't have an account <a href="/register">Register now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
