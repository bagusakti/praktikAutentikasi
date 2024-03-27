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
</div>
      
@endsection