@extends('layouts.admin')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <h3>Peminjaman</h3>
        </div>
    </div>
</div>


<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Peminjaman</h2>
    </div>


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

  <div class="card-body">
        <div class="col-md-6">
         <form method="get" action="{{ route('peminjaman_search') }}">
               <form method="get" action="/search">
            <div class="input-group">
                <input type="date"  class="form-control" name="search"   placeholder="Search ">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
</div>


    <div class="card-body">
        <div style="margin-bottom: 20px">
           
              <a href="{{ url('peminjaman-pdf') }}" class="btn btn-danger btn-flat">
                <i class="fa fa-file-pdf"></i> Export PDF
            </a>
             <a href="{{ url('peminjaman-excel') }}" class="btn btn-success btn-flat">
                <i class="fa fa-file-excel"></i> Export Excel
            </a>
        </div>
        <div style="overflow: auto">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th style="text-align:center;">No</th>
                        <th style="text-align:center;">Nama Buku</th>
                        <th style="text-align:center;">Anggota</th>
                        <th style="text-align:center;">Tanggal Pinjam</th>
                        <th style="text-align:center;">Tanggal Kembali</th>
                        <th style="text-align:center;">Denda</th>
                        <th style="text-align:center;">Status Peminjaman</th>
                        <th width="250px" style="text-align: center;">Action</th>

                        
                    </tr>
                </thead>
                @foreach($peminjamans as $pinjam)
                <tbody>
                    <tr>
                        <td style="text-align:center">{{ $loop->iteration }}</td>
                        <td style="text-align:center">{{ @$pinjam->buku->nama }}</td>
                        <td style="text-align:center">{{ $pinjam->id_anggota }}</td>
                        <td style="text-align:center" style="text-align:center">{{ $pinjam->tanggal_pinjam }}</td>
                        <td style="text-align:center">{{ $pinjam->tanggal_kembali }}</td>
                        <td style="text-align:center">{{ $pinjam->denda }}</td>
                        <td style="text-align:center">{{ $pinjam->id_status_peminjaman }}</td>
                        <td style="text-align:center">

                            <a href="{{ route('peminjaman_show', $pinjam->id) }}" class="btn btn-info">
                                <i class="fas fa-fw fa-eye"></i>
                            </a>

                          
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection