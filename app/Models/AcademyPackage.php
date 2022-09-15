<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademyPackage extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'academy_packages';
    protected $fillable = [
        'title',
        'type',
        'picture',
        'mentor',
        'rating',
        'time',
        'lesson',
        'level',
        'desc_detail',
        'desc_goal',
        'desc_syllabus'
    ];
}
