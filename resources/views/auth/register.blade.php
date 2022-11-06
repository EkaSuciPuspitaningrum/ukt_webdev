@extends('layouts.regis')

@section('title', 'Registrasi')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
    <div class="card card-primary">
        <div class="card-header"><h4>Registrasi</h4></div>
        <div class="card-body">
          <form method="POST" action="{{ route('register.perform') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="nim" value="{{ old('nim') }}" placeholder="Nomor Induk Mahasiswa" required="required" autofocus>
                        <label for="floatingName">NIM</label>
                        @if ($errors->has('nim'))
                            <span class="text-danger text-left">{{ $errors->first('nim') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" placeholder="Nama Lengkap" required="required" autofocus>
                        <label for="floatingName">Nama Lengkap</label>
                        @if ($errors->has('nama'))
                            <span class="text-danger text-left">{{ $errors->first('nama') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                        <label for="floatingEmail">Email</label>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                        <label for="floatingPassword">Password</label>
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                        <label for="floatingConfirmPassword">Confirm Password</label>
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="foto">Foto</label>
                        <div class="custom-file">
                            <div class="input-group">
                                <label style="color: white" class="input-group-text btn btn-primary"  for="foto" >Upload</label>
                                <input type="file" class="choose form-control" name="foto" id="foto" autofocus required>
                            </div>
                        </div>
                    </div>
                </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
          </form>
    
          <div class="float-left">
            <a href="{{url("/")}}"
                class="text-medium">
                Sudah Punya Akun?
            </a>
        </div>
        </div>
      </div>

      @push('scripts')
      <!-- JS Libraies -->
      <script src="{{ asset("/js/page/auth-register.js") }}"></script>
      <!-- Page Specific JS File -->
  @endpush