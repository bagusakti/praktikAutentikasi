@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="login-form">
          <h1 class="text-center display-4">Halaman Login</h1>
          <p class="text-center lead">Praktik Proyek Kedua - Platform Berbasis Autentikasi</p>
            <p class="text-center lead">Belum Memiliki akun? 
                <a href="" class="btn btn-outline-primary">Daftar</a>
            </p>
          <form method="POST" action="">
            @csrf
            <div class="form-group">
              <label for="email">Masukkan Email: </label>
              <input type="email" class="form-control" value="" id="email" name="email" placeholder="Masukkan Email Anda">
            </div>
            <div class="form-group mt-3">
              <label for="password">Masukkan Password: </label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password Anda">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Login</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection