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
                 <img src="{{ asset('img/laskar-pelangi.jpg') }}"  class="img-fluid rounded-start"  alt="..." style="width: 100%; border-radius: 20px; margin-top: 40px;" >
              </div>
              <div class="col-12, col-md-8">
                <div class="card-body">
                 <h5 style="text-align">Laskar Pelangi</h5>
                    <p class="date">Tahun Terbit : 2005.</p>
                    <p class="detaile">Jika kamu seorang penggemar bacaan novel, tentu nama Andrea Hirata tidak asing lagi untuk kamu. Pasalnya, Andrea Hirata merupakan salah satu penulis yang terkenal di Indonesia bahkan juga di kancah internasional. Sudah banyak karyanya yang sudah dirilis, salah satunya adalah novel Laskar Pelangi. Di mana, novel Laskar Pelangi menjadi salah satu novel mega best seller dan sudah berhasil dicetak ulang berkali-kali sampai dengan saat ini. Dirilis pada tahun 2005 oleh penerbit Bentang Pustaka, novel Laskar Pelangi berhasil melalang buana sampai kancah internasional. Buktinya, novel Laskar Pelangi ini sudah diterjemahkan ke dalam 40 bahasa asing, terbit dalam 22 bahasa, dan sudah beredar di lebih dari 130 negara. Novel Laskar Pelangi sendiri terinspirasi dari kisah nyata dari kehidupan Andrea Hirata sendiri sebagai penulis. Hal ini karena kisahnya yang begitu inspiratif, membuat novel Laskar Pelangi banyak diadaptasi ke dalam berbagai bentuk, seperti layar lebar, serial TV, drama musical, dan sebagainya. Jika kamu penasaran dengan kisah di dalam novel Laskar Pelangi, sebagai permulaan kamu bisa membaca terlebih dahulu sinopsis novel Laskar Pelangi berikut ini.

                    </p>
                    <i class="fas fa-star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </i>
                    <p> 
                      <br> Bahasa	          :	Indonesian
                      <br>
                      <br> Penerbit	          :	Bentang Pustaka
                      <br>
                      <br> Penulis	          :	Andrea Hirata
                      <br>
                      <br> Jumlah halaman  	  :	529</p>
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