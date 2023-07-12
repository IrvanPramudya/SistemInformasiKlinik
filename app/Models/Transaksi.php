<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable =
    [
        'kode_transaksi',
        'jenis',
        'status',
        'tambahan_diagnosa',
        'dp',
    ];

    public function transaksiObat()
    {
        return $this->hasMany(TransaksiObat::class);
    }

    public function transaksiTindakan()
    {
        return $this->hasMany(TransaksiTindakan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getStatusAttribute($value)
    {
        return $value == 'Lunas' ? 'Dibayar' : 'Belum Bayar';
    }
}
