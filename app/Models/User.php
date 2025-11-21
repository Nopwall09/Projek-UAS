<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    protected $fillable = [
        'role_id','user_nama','user_usn','user_pw',
        'user_email','user_no','last_login'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'user_id');
    }
}
