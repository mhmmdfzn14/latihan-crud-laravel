@extends('layouts.main')
@section('title','Tambah Data | Latihan Crud 1')
@section('content')
<div class="container">
<div class="border mt-2 border-warning">
        <h1 class="text-center text-danger">Tambah Data | Latihan Crud 1</h1>
    </div>
    <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row align-items-start">
        <div class="col">
            <div class="mt-2">
                <label for="">nis</label><br>
                <input class="form-control" type="number" id="nis" required name="nis">
            </div>
            <div class="mt-2">
                <label for="">nama</label><br>
                <input class="form-control" type="text" id="nama" required name="nama">
            </div>
            <div class="mt-2">
                <label for="">rombel</label><br>
                <input class="form-control" type="text" id="rombel" required name="rombel">
            </div>
            <div class="mt-2">
                <label for="">rayon</label><br>
                <input class="form-control" type="text" id="rayon" required name="rayon">
            </div>
            <div class="mt-2">
                <label for="">tanggal lahir</label><br>
                <input class="form-control" type="date" id="tanggal_lahir" required name="tanggal_lahir">
            </div>
            <div class="mt-2">
                <label for="">tempat lahir</label><br>
                <input class="form-control" type="text" id="tempat_lahir" required name="tempat_lahir">
            </div>
        </div>


        <div class="col">        
            <div class="mt-2">
                <label for="alamat">alamat</label><br>
                <textarea class="form-control" id="alamat" required name="alamat" rows="4"></textarea>
            </div>
            <div class="mt-2">
                <label for="">nomor hp</label><br>
                <input class="form-control" type="number" id="no_hp" required name="no_hp">
            </div>
            <div class="mt-2">
                <label for="">email</label><br>
                <input class="form-control" type="email" id="email" required name="email">
            </div>
            <div class="mt-2">
                <label for="">*pas foto</label><br>
                <input class="form-control" type="file" id="pas_foto" name="pas_foto">
            </div>
        
        </div>
            <div class="mt-4">
                <button type="submit" class="mt-1 float-end btn btn-success ">Kirim</button>
                <a href="{{ url()->previous() }}" class="float-end mt-1 btn btn-warning">Kembali</a>
            </div>

    </form>
</div>
@endsection