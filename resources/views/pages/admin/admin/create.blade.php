@extends('layouts.admin')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>
          </div>

          <div class="card-body">
            <form action="{{ route('admin_store') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                <label for="nama_admin">Nama Admin</label>
                <input type="text" class="form-control @error('nama_admin') is-invalid @enderror" id="nama_admin" name="nama_admin" value="{{ old('nama_admin') }}" placeholder="Enter nama_admin">
                @error('nama_admin')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
           
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" placeholder="Enter username" >
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="password">password</label>
                <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" placeholder="Enter password" >
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            
             
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>

        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>


@endsection