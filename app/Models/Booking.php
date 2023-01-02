<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_booking';
    protected $fillable = [
        'id_pelanggan',
        'nm',
        'room',
        'fasilitas',
        'cek_in',
        'cek_out',
        'no_tlp',
        'email',
        'jumlah_tamu'

    ];
}
