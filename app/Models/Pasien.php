<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $fillable = [
        'kode_pasien',
        'nama',
        'umur',
        'jenis_kel',
        'nohp',
        'kelurahan',
        'kota',
        'kode_pos',
        'tgl_lahir',
    ];
    public static $rules = [
        'nama'      => 'required',
        'kode_pasien'      => 'required|string|max:4',
        'umur'      => 'required',
        'jenis_kel'      => 'required',
        'nohp'      => 'required',
        'kelurahan'      => 'required',
        'kota'      => 'required',
        'kode_pos'      => 'required',
        'tgl_lahir'      => 'required|date',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
