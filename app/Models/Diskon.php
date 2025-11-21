<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    protected $table = 'diskon';
    protected $primaryKey = 'diskon_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'detail_id','kode_diskon','nilai_diskon',
        'jenis_diskon','status'
    ];

    public function detailTransaksi()
    {
        return $this->belongsTo(DetailTransaksi::class, 'detail_id');
    }
}

