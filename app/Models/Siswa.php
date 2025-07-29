<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'tb_siswa';
    protected $primaryKey = 'id_siswa';
    public $incrementing = false;

    protected $fillable = [
        'id_siswa', 'nama_siswa', 'nisn', 'id_kelas',
        'alamat_siswa', 'jkel_siswa', 'tgl_siswa'
    ];
}
