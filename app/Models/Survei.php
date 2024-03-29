<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survei extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $casts = [
        'timestamp' => 'datetime', // Mengonversi kolom timestamp ke objek DateTime
    ];
}
