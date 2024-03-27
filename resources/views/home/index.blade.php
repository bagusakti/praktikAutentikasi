@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="login-form">
                <h1 class="text-center display-4">Halaman Utama</h1>
                <p class="text-center lead">Praktik Proyek Kedua - Platform Berbasis Autentikasi</p>
                <p class="text-center lead">
                    @if (Auth::check())
                        <div class="d-flex justify-content-center">
                            <form method="POST" action="">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                        </div>
                    @else
                        <a href="" class="btn btn-outline-primary">Masuk</a>
                        <a href="" class="btn btn-outline-warning">Daftar</a>
                    @endif
                </p>
            </div>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Data Siswa</h5>
          <h6 class="card-subtitle mb-2 text-muted">Praktik Proyek Kedua</h6>
          <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci laborum nobis iure nam nostrum. Alias!</p>
          @if (Auth::check())
          @else
          <a href="ss" class="btn btn-primary disabled" aria-disabled="true">Masuk</a>
          <p class="card-link" style="color: red">silahkan login terlebih dahulu</p>
          @endif
        </div>
      </div>
</div>
      
@endsection