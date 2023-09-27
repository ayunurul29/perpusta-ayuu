@extends('layouts.admin')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <h3>Buku</h3>
        </div>
    </div>
</div>

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Buku</h2>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="card-body">
         <div style="margin-bottom: 20px">
            <a href="{{ route('buku_index') }}" class="btn btn-primary btn-flat">Kembali</a>
        </div>
        <table class="table table-bordered">
            <tr>
                <th style="width: 180px">Nama</th>
                <td>{{ $data->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Tahun Terbit</th>
                <td>{{ $data->tahun_terbit }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Penulis</th>
                <td>{{ $data->penulis->nama}}</td>
            </tr>
            <tr>
                <th style="width: 180px">Penerbit</th>
                <td>{{ $data->penerbit->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Kategori</th>
                <td>{{ $data->kategori->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Sinopsis</th>
                <td>{{ $data->sinopsis }}</td>
            </tr>
            
            <tr>
                <th style="width: 180px">Sampul</th>
                <td><img src="{{ asset('storage/'.$data->sampul) }}" style="width: 150px;"></td>
            </tr>
        </table>
    </div>
</div>
</div>
@endsection