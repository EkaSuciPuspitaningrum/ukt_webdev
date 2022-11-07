@extends('layouts.auth-master')

@section('title', 'Login')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">
@endpush

@section('content')


<div class="card card-primary">
    <div class="card-header">
        <h4>Login</h4>
    </div>
    <div class="card-body">
    
        <form method="post" action="{{ route('login.perform') }}">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            @include('layouts.partials.messages')
    
            <div class="form-group form-floating mb-3">
                <label for="floatingName">Email atau Nama Lengkap</label>
                <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required="required" autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>
            
            <div class="form-group form-floating mb-3">
                <label for="floatingPassword">Password</label>
                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>
    
            <div class="form-group mb-3">
                <input type="checkbox" name="remember" value="1">
                <label for="remember">Remember me</label>
            </div>
    
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
        <br>
        <div class="float-right">
            <a href="{{route("register.show")}}"
                class="text-medium">
                Belum punya akun?
            </a>
        </div>
    </div>
</div>
@endsection
