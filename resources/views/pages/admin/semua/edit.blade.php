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
            <form action="{{ route('semua_update', $item->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
                     <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama" value="{{ $item->nama }}">
              </div>
              
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="{{ $item->username }}">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Enter password" value="{{ $item->password }}">
              </div>
                <div class="form-group">
                <label for="user_role">User Role</label>
                <input type="text" class="form-control" id="user_role" name="user_role" placeholder="Enter user role" value="{{ $item->user_role }}">
              </div>
             
             
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>

            <a href="{{ route('semua_index') }}" class="btn btn-primary btn-flat">Kembali</a>
          </div>
          </form>

        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>


@endsection