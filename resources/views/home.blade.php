@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="layout.css">
    <script src="https://kit.fontawesome.com/f9355065a6.js" crossorigin="anonymous"></script>
    <title>DT~Library</title>
</head>
<body> 

  

<div class="container  mt-5 margin-right margin-top" >
  <div class="row">
  <div class="col-12 col-md-4  ">
    <div class="card2 " style="width: 18rem;">
      <img src="{{ asset('img/laskar-pelangi.jpg') }}" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body ">
        <h5 style="text-align: center;">Laskar Pelangi</h5>
       <div class="star text-center">
        <i  class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>

        <i style="color: black;" class="far fa-star"></i>
       </div>        
        <p class="date text-center">Tahun Terbit : 2005</p>
         <p class="detaile">Novel Laskar Pelangi mengisahkan tentang kehidupan dari 10 anak hebat yang mempunyai semangat juang yang tinggi untuk tetap melanjutkan sekolah di kampung Gantung, Kepulauan Bangka Belitung.</p>
          <a class="btn btn-primary" href="{{ route('lp-buku') }}" role="button">Preview</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="card2 " style="width: 18rem;">
      <img src="{{ asset('img/saat-saat-jauh.jpg') }}" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body">
        <h5 style="text-align: center;">Saat Saat Jauh</h5>
        <div class="star text-center">
          <i  class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>

         </div> 
        <p class="date text-center">Tahun Terbit : 2021</p>
          <p class="detaile">Novel Saat Saat Jauh menceritakan tentang Aline dan Alex saling percaya bahwa mereka akan selalu bersama. Namun, keyakinan itu memudar seiring lebarnya jarak yang memisahkan mereka. Alex pergi ke Kota Terik demi mengejar kesempatan sebagai dokter yang sesuai standard keluarga besarnya. Aline mempertahankan ambisi untuk mengurus Panti Jompo J&J di Kota Teduh.
          </p>
          <a class="btn btn-primary" href="{{ route('ssj-buku') }}" role="button">Preview</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="card2 " style="width: 18rem;">
      <img src="{{ asset('img/The Mysterious affair at styles.jpg') }}" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body">
        <h5 style="text-align: center;">The Mysterious affair</h5>
        <div class="star text-center">
          <i  class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
         
          <i style="color: black;" class="far fa-star"></i>

         </div> 
        <p class="date text-center">Tahun Terbit : 2003</p>
          <p class="detaile"> The Mysterious Affair at Styles adalah sebuah novel detektif karya Agatha Christie. Karya tersebut ditulis pada pertengahan Perang Dunia Pertama, pada tahun 1916, dan pertama kali diterbitkan oleh John Lane di Amerika Serikat pada Oktober 1920[1] dan di Inggris oleh The Bodley Head (perusahaan Inggris milik John Lane) pada 21 Januari 1921.[2] </p>
          <a class="btn btn-primary" href="{{ route('tmas-buku') }}" role="button">Preview</a>
      </div>
    </div>
  </div>
 
  


</div>
</div>
</footer>
</body>
</html>
@endsection