<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $fillable = [
        'kode_pegawai',
        'nama_pegawai',
        'no_hp',
        'tanggal_lahir',
        'alamat',
        'posisi',
    ];

    public static $rules = [
        'nama_pegawai'      => 'required',
        'kode_pegawai'      => 'required|string|max:4',
        'no_hp'      => 'required|integer|max:13',
        'tanggal_lahir'      => 'required',
        'alamat'      => 'required',
        'posisi'      => 'required',
    ];
}
