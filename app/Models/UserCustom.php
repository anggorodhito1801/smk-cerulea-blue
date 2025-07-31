<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCustom extends Model
{
    protected $table = 'tb_user'; // Wajib karena bukan nama default Laravel
    protected $primaryKey = 'username'; // jika username adalah PRIMARY
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['username', 'nama', 'email', 'pass'];
}
