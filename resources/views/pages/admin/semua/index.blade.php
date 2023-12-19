@extends('layouts.admin')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data User</h2>
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
            <a href="{{ route('semua_create') }}" class="btn btn-primary btn-flat">
                <i class="fa fa-plus-circle"></i> Tambah Data
            </a>
            <a href="{{ url('semua-excel') }}" class="btn btn-success btn-flat">
                <i class="fa fa-file-excel"></i> Export Excel
            </a>
            <a href="{{ url('semua-pdf') }}" class="btn btn-danger btn-flat">
                <i class="fa fa-file-pdf"></i> Export PDF
            </a>

        </div>
        <div style="overflow: auto">
            <table class="table table-bordered table-condensed">
                <tr>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center">Nama</th>
                    <th style="text-align:center">Username</th>
                    <th style="text-align:center;">Password</th>
                    <th style="text-align:center">User Role</th>
                    <th width="250px" style="text-align: center;">Action</th>
                </tr>
                @foreach ($semua as $value)
                <tr>
                    <td style="text-align:center;">{{ $loop->iteration }}</td>
                    <td style="text-align:center;">{{ $value->nama}}</td>
                    <td style="text-align:center;">{{ $value->username }}</td>
                    <td style="text-align:center;">{{ $value->password }}</td>
                    <td style="text-align:center;">{{ @$value->role->role}}</td>
                    <td style="text-align:center">
               
             <a class="btn btn-info" href="{{ route('semua_show',$value->id) }}">
                    <i class="fas fa-fw fa-eye"></i>
                    </a>
          
                    <a class="btn btn-warning" href="{{ route('semua_edit',$value->id) }}">
                        <i class="fas fa-fw fa-pencil"></i>
                    </a>
         
                      <form action="{{ route('semua_destroy', $value->id) }}" method="post" class="d-inline">
                                @csrf
                      <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger" >
                        <i class="fas fa-fw  fa-trash"></i>
                    </button>
                      </form>

                
         
                    
                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection