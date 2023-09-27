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
            <form action="{{ route('buku_store') }}" method="POST" enctype="multipart/form-data">
              @csrf
                 <div class="form-group">
                <label for="nama">Nama Buku</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"placeholder="Enter nama" >
                @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
             <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="text" class="form-control @error('tahun_terbit') is-invalid @enderror" id="tahun_terbit" name="tahun_terbit"  placeholder="tahun terbit" >
                @error('tahun_terbit')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
                <div class="form-group">
                <label for="id_penulis">Penulis</label>
                <select class="form-control" id="id_penulis" name="id_penulis" >
                <option  value>Pilih Penulis</option>
                @foreach($penulis as $p)
                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                @endforeach
           
            </select>
              </div>
             <div class="form-group">
                <label for="id_penerbit">Penerbit</label>
                <select class="form-control" id="id_penerbit" name="id_penerbit" >
               <option value>Pilih Penerbit</option>
                @foreach($penerbit as $p)
                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                @endforeach
           
                </select>
                </div>
                <div class="form-group">
                <label for="id_kategori">Kategori</label>
                <select class="form-control" id="id_kategori" name="id_kategori" >
                <option value>Pilih Kategori</option>
                @foreach($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                @endforeach
           
                </select>
                </div>
                <div class="form-group">
                <label for="sinopsis">Sinopsis</label>
                <input type="text" class="form-control @error('sinopsis') is-invalid @enderror" id="sinopsis" name="sinopsis" placeholder=" sinopsis" >
                @error('sinopsis')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                   <div class="form-group">
                <label for="jumlah">Jumlah Buku</label>
                <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" placeholder="jumlah buku" >
                @error('jumlah')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
               
              <div class="form-group">
                 <div class="row">
        <div class="col-lg">
           <div class="mb-3">
  <label for="sampul">Foto Sampul</label>
  <input class="form-control" type="file" id="sampul" name="sampul">
</div>
</div>
  </div>
              </div>
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