<?php
  use Illuminate\Support\Facades\Auth;

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">


<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('adminlte/dist/img/logoperpus2.png')}}" alt="PERPUSTAKAAN logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PERPUSTAKAAN </span>
    </a>

    <div class="sidebar"> 
        @if(auth()->check() && auth()->user()->role == 'admin') 
            @include('includes._menu-admin') 
        @elseif(auth()->check() && auth()->user()->role == 'anggota') 
                 @include('includes._menu-anggota') 
        @endif 
     
    </div> 
    

  </aside>