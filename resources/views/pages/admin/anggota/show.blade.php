@extends('layouts.admin')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Anggota</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th style="width: 180px">Nama</th>
                <td>{{ $data->nama }}</td>
            </tr>
        
            <tr>
                <th style="width: 180px">Alamat</th>
                <td>{{ $data->alamat }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Email</th>
                <td>{{ $data->email }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection