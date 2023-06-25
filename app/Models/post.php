<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'image',
        'date',];
    public function person(){
        return $this->belongsTo(person::class);
    }
    public function comment(){
        return $this->hasMany(comment::class);
    }
}
