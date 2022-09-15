<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SilabusPackage extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'silabus_packages';

    public $fillable = [
        'academy_package_id',
        'silabus_title',
        'silabus_time',
        'silabus_lesson'
    ];
}
