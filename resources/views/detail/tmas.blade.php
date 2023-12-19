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
                 <img src="{{ asset('img/The Mysterious affair at styles.jpg') }}"  class="img-fluid rounded-start"  alt="..." style="width: 100%; border-radius: 20px; margin-top: 40px;" >
              </div>
              <div class="col-12, col-md-8">
                <div class="card-body">
                 <h5 style="text-align">Saat Saat Jauh</h5>
                    <p class="date">Tahun Terbit : 2001.</p>
                    <p class="detaile">Dame Agatha Mary Clarissa Christie adalah seorang penulis fiksi kriminal asal Inggris yang terkenal dengan karya-karyanya berupa novel detektif. Kurang lebih ada 66 novel detektif karya Agatha dan 14 cerita pendek karyanya.

Karya Agatha yang paling terkenal bercerita mengenai kisah seorang detektif fiksi bernama Hercule Poirot dan Miss Marple. Agatha juga adalah seorang penulis pementasan drama paling lama yang ada di dunia dengan judul drama The Mousetrap yang ditampilkan di Teater West End dari tahun 1952 hingga tahun 2020.

Pertunjukkan drama tersebut kemudian ditutup pada bulan Maret 2020 dikarenakan adanya Pandemi Covid-19. Agatha juga menulis kurang lebih 6 novel dengan menggunakan nama samarannya yaitu Mary Westmacott.

Di tahun 1971, Agatha Christie diangkat menjadi Dame (DBE) yaitu Bintang Kekaisaran Britania Raya atau Ordo Imperium Britania yang diberikan atas dedikasi Agatha pada bidang seni serta ilmu pengetahuan.

Lalu Guinness World of Record pun mencantumkan nama Agatha Christie sebagai seorang penulis fiksi paling laris sepanjang masa, novel-novelnya telah terjual lebih dari dua miliar eksemplar.


Agatha Christie lahir dari keluarga kelas menengah atas yang kaya di Torquay Devon dan ia mendapatkan pendidikan dengan bersekolah di rumah. Pada masa-masa awal kariernya sebagai seorang penulis, Agatha sempat mengalami enam penolakan berturut-turut.

Sebelum akhirnya di tahun 1920, karya Agatha dengan judul The Mysterious Affair at Styles yang menampilkan tokoh Hercule Poirot diterbitkan. Menurut Index Translationum, Agatha tetap menjadi seorang penulis independen dengan karya yang paling banyak diterjemahkan.


Karyanya yang berjudul Lalu Semuanya Lenyap merupakan salah satu buku dengan penjualan paling tinggi sepanjang masa dengan total penjualan mencapai sekitar 100 juta eksemplar.

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
                      <br> Penerbit	          :	  Gramedia
                      <br>
                      <br> Penulis	          :	 Agatha Christie
                      <br>
                      <br> Jumlah halaman  	  :	2772</p>
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