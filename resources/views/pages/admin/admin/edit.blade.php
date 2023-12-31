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
            <h3 class="card-title">Rubah Data</h3>
          </div>

          <div class="card-body">
            <form action="{{ route('admin_update', $item->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
                     <div class="form-group">
                <label for="nama_admin">Nama Admin</label>
                <input type="text" class="form-control" id="nama_admin" name="nama_admin" placeholder="Enter penerbit" value="{{ $item->nama_admin }}">
              </div>
              
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter tahun terbit" value="{{ $item->username }}">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Enter tahun terbit" value="{{ $item->password }}">
              </div>
             
             
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>

            <a href="{{ route('admin_index') }}" class="btn btn-primary btn-flat">Kembali</a>
          </div>
          </form>

        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>


@endsection