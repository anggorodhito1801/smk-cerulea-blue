<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;

class Kelas extends Model
{
    protected $table = 'tb_kelas';
    protected $primaryKey = 'id_kelas';
    public $incrementing = false;

    protected $fillable = [
        'id_kelas', 'nama_kelas', 'tingkat_kelas', 'jurusan', 'wali_kelas'
    ];

public function wali()
{
    return $this->belongsTo(Guru::class, 'wali_kelas', 'id_guru');
}

}