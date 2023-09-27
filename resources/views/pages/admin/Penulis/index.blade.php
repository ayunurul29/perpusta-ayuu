@extends('layouts.admin')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <h3>Penulis</h3>
        </div>
    </div>
</div>


<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Penulis</h2>
    </div>


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
      <div class="card-body">
        <div class="col-md-6">
         <form method="get" action="{{ route('penulis_search') }}">
               <form method="get" action="/search">
            <div class="input-group">
                <input type="search"  class="form-control" name="search"   placeholder="Search Nama Penulis..">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
</div>

    <div class="card-body">
        <div style="margin-bottom: 20px">
            <a href="{{ route('penulis_create') }}" class="btn btn-primary btn-flat">
                <i class="fa fa-plus-circle"></i> Tambah Data
            </a>
              <a href="{{ url('penerbit-pdf') }}" class="btn btn-danger btn-flat">
                <i class="fa fa-file-pdf"></i> Export PDF
            </a>
           <a href="{{ url('penulis-excel') }}" class="btn btn-success btn-flat">
                <i class="fa fa-file-excel"></i> Export Excel
            </a>
        </div>
        <div style="overflow: auto">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th style="text-align:center;">No</th>
                        <th style="text-align:center;">Nama Penulis</th>
                        <th style="text-align:center;">Alamat</th>
                        <th style="text-align:center;">Telepon</th>
                        <th style="text-align:center;">Email</th>
                        <th style="text-align:center;">Jumlah Buku</th>
                        <th width="250px" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                @foreach($penulis as $pen)
                <tbody>
                    <tr>
                        <td style="text-align:center">{{ $loop->iteration }}</td>
                        <td style="text-align:center">{{ $pen->nama }}</td>
                        <td style="text-align:center">{{ $pen->alamat }}</td>
                        <td style="text-align:center">{{ $pen->telepon }}</td>
                        <td style="text-align:center">{{ $pen->email }}</td>
                        <td style="text-align:center">{{ $pen->getJumlahBuku()  }}</td>
                        </td>
                        <td style="text-align:center">

                            <a href="{{ route('penulis_show', $pen->id) }}" class="btn btn-info">
                                <i class="fas fa-fw fa-eye"></i>
                            </a>

                            <a href="{{ route('penulis_edit', $pen->id) }}" class="btn btn-warning">
                                <i class="fas fa-fw fa-pencil"></i>
                            </a>

                            <form action="{{ route('penulis_destroy', $pen->id) }}" method="post" class="d-inline">
                                @csrf
                               <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger" ><i class="fas fa-fw  fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection