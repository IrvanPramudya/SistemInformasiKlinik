<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    use HasFactory;
    protected $table = 'tindakan';
    protected $fillable = [
        'kode_tindakan',
        'nama',
        'fee_dokter',
        'fee_karyawan',
        'harga',
        'desc',
        'kategori',
    ];

    public static $rules = [
        'nama'      => 'required',
        'kode_tindakan'      => 'required|string|max:4',
        'fee_dokter'      => 'required',
        'fee_karyawan'      => 'required',
        'harga'      => 'required',
        'desc'      => 'required',
        'kategori'      => 'required',
    ];
}
