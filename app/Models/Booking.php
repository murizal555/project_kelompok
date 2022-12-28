<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pelanggan',
        'nm',
        'room',
        'fasilitas',
        'cek_in',
        'cek_out'

    ];
}
