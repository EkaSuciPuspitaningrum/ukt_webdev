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
                        <label for="floatingNim">NIM</label>
                        <input type="text" class="form-control" name="nim" value="{{ old('nim') }}" placeholder="Nomor Induk Mahasiswa" required="required" autofocus>
                        @if ($errors->has('nim'))
                            <span class="text-danger text-left">{{ $errors->first('nim') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="floatingName">Nama Lengkap</label>
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Nama Lengkap" required="required" autofocus>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="floatingEmail">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="floatingPassword">Password</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="floatingConfirmPassword">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Konformasi Password" required="required">
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="foto">Foto</label>
                        <div class="custom-file">
                            <div class="input-group">
                                <label style="color: white" class="input-group-text btn btn-primary" for="foto" >Upload</label>
                                <input type="file" class="choose form-control" name="foto" value="{{ old('foto') }}" id="foto" required="required">
                                @if ($errors->has('password_confirmation'))
                                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 200px">
                      Daftar
                    </button>
                </div>
          </form>
          <br>
          <div class="text-right">
            <a href="{{route("login.show")}}"
                class="text-medium">
                Sudah Punya Akun?
            </a>
          </div>
        </div>
      </div>
    </div>
@endsection

@push('scripts')
      <!-- JS Libraies -->
      <script src="{{ asset("/js/page/auth-register.js") }}"></script>
      <!-- Page Specific JS File -->

@endpush