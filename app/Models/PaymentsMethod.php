<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentsMethod extends Model
{
    protected $table = 'payments_method';
    protected $primaryKey = 'pay_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = ['transaksi_id','pay_method'];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'transaksi_id');
    }
}

