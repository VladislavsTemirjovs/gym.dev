<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'content',
        'image',
        'date',];
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comment(){
        return $this->hasMany(comment::class);
    }
}
