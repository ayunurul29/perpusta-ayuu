@extends('layouts.admin')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <h3>Penerbit</h3>
        </div>
    </div>
</div>



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
        <div class="col-md-6">
         <form method="get" action="{{ route('penerbit_search') }}">
               <form method="get" action="/search">
            <div class="input-group">
                <input type="search"  class="form-control" name="search"   placeholder="Search Nama Penerbit..">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
</div>
    <div class="card-body">
        <div style="margin-bottom: 20px">
            
              <a href="{{ url('penerbit-pdf') }}" class="btn btn-danger btn-flat">
                <i class="fa fa-file-pdf"></i> Export PDF
            </a>
              <a href="{{ url('penerbit-excel') }}" class="btn btn-success btn-flat">
                <i class="fa fa-file-excel"></i> Export Excel
            </a>
        </div>
        <div style="overflow: auto">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th style="text-align:center;">No</th>
                        <th style="text-align:center;">Nama Penerbit</th>
                        <th style="text-align:center;">Alamat</th>
                        <th style="text-align:center;">Telepon</th>
                        <th style="text-align:center;">Email</th>
                        <th style="text-align:center;">Jumlah Buku</th>
                        <th width="250px" style="text-align: center;">Action</th>

                        
                    </tr>
                </thead>
                @foreach($penerbits as $p)
                <tbody>
                    <tr>
                        <td style="text-align:center">{{ $loop->iteration }}</td>
                        <td style="text-align:center">{{ $p->nama }}</td>
                        <td style="text-align:center">{{ $p->alamat }}</td>
                        <td style="text-align:center">{{ $p->telepon }}</td>
                        <td style="text-align:center">{{ $p->email }}</td>
                        <td style="text-align:center">{{ $p->getJumlahBuku()  }}</td>
                        </td>
                        <td style="text-align:center">

                            <a href="{{ route('penerbit_show', $p->id) }}" class="btn btn-info">
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