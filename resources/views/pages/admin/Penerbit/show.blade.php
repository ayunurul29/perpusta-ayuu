@extends('layouts.admin')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Penerbit</h2>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="card-body">
         <div style="margin-bottom: 20px">
            <a href="{{ route('penerbit_index') }}" class="btn btn-primary btn-flat">Kembali</a>
        </div>
        <table class="table table-bordered">
            <tr>
                <th style="width: 180px">Nama Penerbit</th>
                <td>{{ $data->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Alamat</th>
                <td>{{ $data->alamat }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Telepon</th>
                <td>{{ $data->telepon}}</td>
            </tr>
           <tr>
                <th style="width: 180px">Email</th>
                <td>{{ $data->email}}</td>
            </tr>
            
        </table>
    </div>
</div>
</div>


<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Buku {{ $data->nama }}</h2>
    </div>


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="card-body">
        <div style="margin-bottom: 20px">
            <a href="{{ route('penerbit_create') }}" class="btn btn-primary btn-flat">
                <i class="fa fa-plus-circle"></i> Tambah Data
            </a>
        </div>
  <div style="overflow: auto">
            <table class="table table-bordered table-condensed">
                <tr>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center;">Judul Buku</th>
                    <th style="text-align:center;">Tahun Terbit</th>
                    <th style="text-align:center;">Penulis</th>
                    <th style="text-align:center;">Penerbit</th>
                    <th style="text-align:center">Kategori</th>
                    <th width="200px" style="text-align: center;">Sinopsis</th>
                    <th style="text-align:center;">Sampul</th>
                </tr>
                <?php $no=1; foreach ($data->getListBuku() as $buku): ?>
                <tr>
                    <td style="text-align:center;"><?= $no; ?></td>
                    <td style="text-align:center;"><?= $buku->nama; ?></td>
                    <td style="text-align:center;"><?= $buku->tahun_terbit; ?></td>
                    <td style="text-align:center;"><?= $buku->penulis->nama; ?></td>
                    <td style="text-align:center;"><?= $buku->penerbit->nama; ?></td>
                    <td style="text-align:center;"><?= $buku->kategori->nama; ?></td>
                    <td style="text-align:center;"><?= $buku->sinopsis; ?></td>
                     <td style="text-align:center;"><img src="{{ asset('storage/'.$buku->sampul) }}" style="width: 150px;"></td>
        
                </tr>
                <?php $no++; endforeach ?>
            </table>
        </div>
    </div>
</div>
@endsection
