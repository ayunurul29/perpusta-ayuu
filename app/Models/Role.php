<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Semua;

class Role extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function admin()
    {
        return $this->hasOne('admin::class');
    }

     public function semua()
    {
        return $this->hasOne('semua::class');
    }
}
