<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class competes extends Model
{
    use HasFactory;
    public function user(){
        return $this->hasMany(User::class);
    }
    public function competition(){
        return $this->hasMany(competition::class);
    }
}
