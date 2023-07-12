<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'obat';
    protected $fillable = [
        'nama',
        'kode_obat',
        'jumlah',
        'harga',
        'tanggal_pesan',
        'kadaluwarsa',
        'deskripsi',
    ];

    public static $rules = [
        'nama'      => 'required',
        'kode_obat'      => 'required|string|max:4',
        'jumlah'      => 'required',
        'harga'      => 'required',
        'tanggal_pesan'      => 'required|date',
        'kadaluwarsa'      => 'required|date',
        'deskripsi'      => 'nullable',
    ];
}
