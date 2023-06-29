<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class competition extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'place',
        'date',
    ];
    public function competes(){
        return $this->belongsTo(competes::class);
    }
}
