<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'produk_id';

    protected $fillable = [
        'kategori_id','nama_produk','ukuran','warna',
        'harga_modal','harga_jual','stok','deskripsi'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function logStok()
    {
        return $this->hasMany(LogStok::class, 'produk_id');
    }

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'produk_id');
    }
}

