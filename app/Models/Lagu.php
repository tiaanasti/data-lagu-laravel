<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lagu extends Model
{
    protected $fillable = [
    'judul',
    'penyanyi',
    'genre',
    'tahun_rilis'
];
}
