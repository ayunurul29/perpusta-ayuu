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
            <form action="{{ route('buku_update', $item->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama" value="{{ $item->nama }}">
              </div>
              <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Enter tahun terbit" value="{{ $item->tahun_terbit }}">
              </div>
               <div class="form-group">
                <label for="id_penulis">penulis</label>
                <select class="form-control" id="id_penulis" name="id_penulis" class="form-control">
                <option value="">Pilih penulis</option>
                @foreach($penulis as $pen)
                <option value="{{ $pen->id }}" {{ $pen->id == $item->id_penulis ? 'selected' : '' }}>{{ $pen->nama }}</option>
                @endforeach
            </select>
              </div>
        <div class="form-group">
                <label for="id_penerbit">Penerbit</label>
                <select class="form-control" id="id_penerbit" name="id_penerbit" class="form-control">
                <option value="">Pilih Penerbit</option>
                @foreach($penerbits as $pen)
                <option value="{{ $pen->id }}" {{ $pen->id == $item->id_penerbit ? 'selected' : '' }}>{{ $pen->nama }}</option>
                @endforeach
            </select>
              </div>
              <div class="form-group">
                <label for="id_kategori">Kategori</label>
                <select class="form-control" id="id_kategori" name="id_kategori" class="form-control">
                <option value="">Pilih Kategori</option>
                @foreach($kategoris as $kategori)
                <option value="{{ $kategori->id }}" {{ $kategori->id == $item->id_kategori ? 'selected' : '' }}>{{ $kategori->nama }}</option>
                @endforeach
            </select>
              </div>
              <div class="form-group">
                <label for="sinopsis">Sinopsis</label>
                <input type="text" class="form-control" id="sinopsis" name="sinopsis" placeholder="Enter sinopsis" value="{{ $item->sinopsis }}">
              </div>
                <div class="form-group">
                <label for="jumlah">jumlah</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Enter jumlah" value="{{ $item->jumlah }}">
              </div>
              <div class="form-group">
                <label for="sampul">Sampul</label>
                <input type="file" class="form-control" id="sampul" name="sampul" placeholder="Enter sampul" value="{{ $item->sampul }}">
              </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>

            <a href="{{ route('buku_index') }}" class="btn btn-primary btn-flat">Kembali</a>
        </div>
          </form>

        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>


@endsection