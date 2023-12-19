<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\Penulis;
use App\Models\Penerbit;
use App\Models\Kategori;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
 {
        $query =  Buku::query();
        $buku =  $query->count();

        $query =  Penulis::query();
        $penulis =  $query->count();

        $query =  Penerbit::query();
        $penerbit =  $query->count();
 
        $query =  Kategori::query();
        $kategori =  $query->count();

         $query =  Peminjaman::query();
        $peminjaman =  $query->count();


          return view('pages.admin.dashboard.dashboard', [
            'title' => 'Dashboard',
            'buku' => $buku,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'kategori' => $kategori,
            'peminjaman' => $peminjaman,

        ]);

    }
    
    }