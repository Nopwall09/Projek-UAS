<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogStok extends Model
{
    protected $table = 'log_stok';
    protected $primaryKey = 'log_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'produk_id','perubahan','stok_sebelumnya',
        'stok_sesudah','tgl'
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}

