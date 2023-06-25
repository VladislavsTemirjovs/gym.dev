<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'sex',
        'age',
        'weigth',
        'bench',
        'squat',
        'deadlift',
    ];
    public function competes(){
        return $this->belongsTo(competes::class);
    }
    public function comment(){
        return $this->hasMany(comment::class);
    }
    public function post(){
        return $this->hasMany(post::class);
    }
}
