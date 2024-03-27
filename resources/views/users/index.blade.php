@extends('layout.main')

@section('content')
<div class="container text-center mt-5">
    <h1 class="display-4">Daftar Siswa</h1>
    <p class="lead">Praktik Proyek Kedua - Platform Berbasis Autentikasi</p>
    <table class="table table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Kelas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Contoh Nama 1</td>
                <td>Multimedia 1</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Contoh Nama 2</td>
                <td>Multimedia 1</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Contoh Nama 3</td>
                <td>Multimedia 1</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection