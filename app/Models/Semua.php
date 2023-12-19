<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class Semua extends Model
{
    use HasFactory;
      use HasFactory;
    protected $guarded = [];



     public function role()
    {
        return $this->belongsTo(role::class, 'user_role');
    }
}

