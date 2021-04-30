@extends('layouts.admin-app')
@section('style')
<style>
            .redbtn{
                
                color: white !important;
                background-color: #ff0000 !important; 
                border: none !important;
                border-radius: 0% !important; 
                padding: 8px 80px !important; 
                margin-top: 10px !important;
                font-size: 15px !important;
                
            }
            .redbtn:hover{
                background-color:black !important;
                color: white !important;
                box-shadow: 0 10px 20px rgb(255 255 255 / 4%) !important;

            }
</style>
@endsection
@section('content')
    <div class="container" style="margin-top: 79px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header "><img src="/main/images/Admin.png" width="150" alt="" style="margin-left: 280px !important; margin-top: 0px;">
                    </div>

                    <div class="card-body" style="padding: 40px 0px !important ;padding-right: 150px !important;">
                        <form method="POST" action="{{ route('admin.login.submit') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6" >
                                    <input id="email" type="email" style="height: calc(1.4em + 1.1rem + 2px) !important;font-size: 1rem !important; border: none !important; border-radius: 0% !important;width: 400px !important; "
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
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" style="height: calc(1.4em + 1.1rem + 2px) !important;font-size: 1rem !important; border: none !important; border-radius: 0% !important;width: 400px !important; "
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="d-grid gap-2 col-1 mx-auto">
                                    <button type="submit" class="btn redbtn" >
                                        {{ __('Login') }}
                                    </button>
                                    
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
