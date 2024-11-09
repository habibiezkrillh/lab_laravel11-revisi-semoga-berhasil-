<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koran extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];
}
