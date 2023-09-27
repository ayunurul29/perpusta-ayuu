<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
 
    use HasFactory;
     protected $guarded = [];
        public function buku()
      {
        return $this->hasMany(Buku::class);
    }
     public function getListBuku()
    {
       return Buku::where('id_penerbit', '=', $this->id)
            ->get();
    }
  
    public function getJumlahBuku()
    {
        $query = Buku::query();

        $query->where('id_penerbit', '=', $this->id);

        return $query->count();
    }
}


