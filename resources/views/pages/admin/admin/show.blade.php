@extends('layouts.admin')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Admin</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
             <tr>
                <th style="width: 180px">Nama Admin</th>
                <td>{{ $data->nama_admin }}</td>
            </tr>
            
            <tr>
                <th style="width: 180px">Username</th>
                <td>{{ $data->username }}</td>
            </tr>
        
            <tr>
                <th style="width: 180px">Password</th>
                <td>{{ $data->password }}</td>
            </tr>
           
        </table>
    </div>
</div>
@endsection