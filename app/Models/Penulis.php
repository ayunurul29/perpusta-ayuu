<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
   
    use HasFactory;
     protected $guarded = [];
        public function buku()
      {
        return $this->hasMany(Buku::class);
    }
     public function getListBuku()
    {
       return Buku::where('id_penulis', '=', $this->id)
            ->get();
    }
       public function getJumlahBuku()
    {
        $query = Buku::query();

        $query->where('id_penulis', '=', $this->id);

        return $query->count();
    }
}


