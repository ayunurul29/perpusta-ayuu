<?php
  use Illuminate\Support\Facades\Auth;

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">


<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar"> 
        @if(auth()->check() && auth()->user()->role == 'admin') 
            @include('includes._menu-admin') 
        @elseif(auth()->check() && auth()->user()->role == 'anggota') 
            @include('includes._menu-anggota') 
        @endif 
    </div> 
    <div class="content"> 
        @yield('content') <!-- Konten utama aplikasi --> 
    </div>

  </aside>