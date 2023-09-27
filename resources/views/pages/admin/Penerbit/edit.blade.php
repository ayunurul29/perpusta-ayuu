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
            <form action="{{ route('penerbit_update', $item->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
                    
              <div class="form-group">
                <label for="nama">Nama Penerbit</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter tahun terbit" value="{{ $item->nama }}">
              </div>
              <div class="form-group">
                <label for="alamat">alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter tahun terbit" value="{{ $item->alamat }}">
              </div>
              <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Enter penulis" value="{{ $item->telepon }}">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter penerbit" value="{{ $item->email }}">
              </div>
              
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>

            <a href="{{ route('penerbit_index') }}" class="btn btn-primary btn-flat">Kembali</a>
          </div>
          </form>

        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>


@endsection