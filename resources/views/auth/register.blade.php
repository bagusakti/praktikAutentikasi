@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="registration-form">
          <h1 class="text-center display-4">Halaman Register</h1>
          <p class="text-center lead">Praktik Proyek Kedua - Platform Berbasis Autentikasi</p>
            <p class="text-center lead">Sudah Memiliki akun? 
                <a href="" class="btn btn-outline-primary ">Masuk</a>
            </p>
          <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Masukkan Nama: </label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Anda">
            </div>
            <div class="form-group mt-3">
              <label for="class">Masukkan Kelas: </label>
              <input type="text" class="form-control" id="class" name="class" placeholder="Masukkan Kelas Anda">
            </div>
            <div class="form-group mt-3">
              <label for="nisn">Masukkan NISN: </label>
              <input type="number" class="form-control" id="nisn" name="nisn"  placeholder="Masukkan NISN Anda">
            </div>
            <div class="form-group mt-3">
              <label for="email">Masukkan Email: </label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda">
            </div>
            <div class="form-group mt-3">
              <label for="password">Masukkan Password: </label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password Anda">
            </div>
            <div class="form-group mt-3">
              <label for="password_confirmation">Masukkan Password: </label>
              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password Anda">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Register</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection