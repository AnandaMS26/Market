<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'materis';

    protected $fillable = [
        'title', 'link', 'picture'
    ];

}
