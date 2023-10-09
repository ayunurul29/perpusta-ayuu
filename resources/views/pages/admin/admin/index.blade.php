@extends('layouts.admin')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Admin</h2>
    </div>

    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card-body">
        <div style="margin-bottom: 20px">
            <a href="{{ route('admin_create') }}" class="btn btn-primary btn-flat">
                <i class="fa fa-plus-circle"></i> Tambah Data
            </a>
            <a href="{{ url('excel') }}" class="btn btn-success btn-flat">
                <i class="fa fa-file-excel"></i> Export Excel
            </a>
            <a href="{{ url('admin-pdf') }}" class="btn btn-danger btn-flat">
                <i class="fa fa-file-pdf"></i> Export PDF
            </a>
        </div>
        <div style="overflow: auto">
            <table class="table table-bordered table-condensed">
                <tr>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center">Nama Admin</th>
                    <th style="text-align:center">Username</th>
                    <th style="text-align:center;">Password</th>
                    <th width="250px" style="text-align: center;">Action</th>
                </tr>
                @foreach ($admin as $value)
                <tr>
                    <td style="text-align:center;">{{ $loop->iteration }}</td>
                    <td style="text-align:center;">{{ $value->nama_admin}}</td>
                    <td style="text-align:center;">{{ $value->username }}</td>
                    <td style="text-align:center;">{{ $value->password }}</td>
                    <td style="text-align:center">
               
           
                    <a class="btn btn-info" href="{{ route('admin_show',$value->id) }}">
                    <i class="fas fa-fw fa-eye"></i>
                    </a>
          
                    <a class="btn btn-warning" href="{{ route('admin_edit',$value->id) }}">
                        <i class="fas fa-fw fa-pencil"></i>
                    </a>
         
                      <form action="{{ route('admin_destroy', $value->id) }}" method="post" class="d-inline">
                                @csrf
                      <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger" ><i class="fas fa-fw  fa-trash"></i></button>
                      </form>
                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection