@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="layout.css">
    <script src="https://kit.fontawesome.com/f9355065a6.js" crossorigin="anonymous"></script>
    <title>Detail</title>
</head>

<br><br>
<div class="container">
    <div class="row">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-12 col-md-4">
                 <img src="{{ asset('img/saat-saat-jauh.jpg') }}"  class="img-fluid rounded-start"  alt="..." style="width: 100%; border-radius: 20px; margin-top: 40px;" >
              </div>
              <div class="col-12, col-md-8">
                <div class="card-body">
                 <h5 style="text-align">Saat Saat Jauh</h5>
                    <p class="date">Tahun Terbit : 2001.</p>
                    <p class="detaile">Aline dan Alex saling percaya bahwa mereka akan selalu bersama. Namun, keyakinan itu memudar seiring lebarnya jarak yang memisahkan mereka. Alex pergi ke Kota Terik demi mengejar kesempatan sebagai dokter yang sesuai standard keluarga besarnya. Aline mempertahankan ambisi untuk mengurus Panti Jompo J&J di Kota Teduh.

Saat mendapatkan promosi, Alex mengajak Aline untuk menikah dan pindah ke Kota Terik. Aline menolak. Sejak awal, gadis itu sudah menegaskan tak akan meninggalkan panti. Mimpi-mimpi mereka tidak lagi bertemu di satu tujuan. Setelah empat tahun menjalani hubungan jarak jauh, mereka berpisah.

Mereka pun berusaha menjalin kehidupan baru bersama orang lain. Alex merasa Vanesa jawaban dari kemapanan yang ia perjuangkan. Sementara Aline merasa Rama akan mengerti keterikatan batinnya dengan panti.

Tiba-tiba Aline dan Alex harus bertemu kembali. Meski berhadap-hadapan, jarak antara mereka terasa tak kunjung menyempit.

                    </p>
                    <i class="fas fa-star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                             <i style="color: black;" class="far fa-star"></i>

                    </i>
                    <p> 
                      <br> Bahasa	          :	Indonesian
                      <br>
                      <br> Penerbit	          :	 Gramedia Pustaka Utama
                      <br>
                      <br> Penulis	          :	 Lia Seplia
                      <br>
                      <br> Jumlah halaman  	  :	280</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <div class="row " >
                    <a class="btn btn-primary" href="{{ route('peminjaman_index') }}" role="button">Pinjam Buku</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
    </div>
</div>



    
           
              </div>
          </div>
      </div>
      </div>
      </footer>
</body>
</html>
@endsection