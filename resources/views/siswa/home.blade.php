@extends('layouts.main')
@section('title','Home | Latihan Crud 1')
@section('content')
<div class="container">
    <div class="border mt-2 border-primary">
        <h1 class="text-center text-danger">Home | Latihan Crud 1</h1>
    </div>
    <a href="{{ route('siswa.create') }}" class="btn btn-primary my-2">Tambah Data</a>
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @elseif(session('status-danger'))
        <div class="alert alert-danger">
            {{ session('status-danger') }}
        </div>
    @endif
    <table id="example" style="width:100%" class="display">
        <thead>
            <tr class="align-center">
                <td>No</td>
                <td>nis</td>
                <td>nama</td>
                <td>rombel</td>
                <td>rayon</td>
                <td>tanggal lahir</td>
                <td>tempat lahir</td>
                <td>alamat</td>
                <td>no_hp</td>
                <td>email</td>
                <td>pas foto</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $dt)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dt->nis }}</td>
                <td>{{ $dt->nama }}</td>
                <td>{{ $dt->rombel }}</td>
                <td>{{ $dt->rayon }}</td>
                <td>{{ $dt->tanggal_lahir }}</td>
                <td>{{ $dt->tempat_lahir }}</td>
                <td>{{ $dt->alamat }}</td>
                <td>{{ $dt->no_hp }}</td>
                <td>{{ $dt->email }}</td>
                <td>
                    @if($dt->pas_foto == '')
                        Tidak ada foto
                    @else
                        <img src="{{ asset('images/'.$dt->pas_foto) }}" alt="" width="150px">
                    @endif
                </td>
                <td>
                    <a class="btn btn-info" href="{{ url('/siswa/edit/'.$dt->id) }}">Edit</a>
                    <form method="post" action="{{ url('/siswa/delete/'.$dt->id) }}">
                        @csrf
                        @method('delete')

                        <button type="submit" onclick="return confirm('Apakah yakin akan menghapus seluruh data {{ $dt->nama }}')" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection