<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'tb_guru';
    protected $primaryKey = 'id_guru';
    public $incrementing = false;
    protected $fillable = [
        'id_guru', 'nama_guru', 'nip', 'email', 'no_hp', 'mapel_ampu', 'jkel_guru'
    ];
}