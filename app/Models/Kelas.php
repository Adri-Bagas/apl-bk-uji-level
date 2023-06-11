<?php

namespace App\Models;

use id;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = [
        'nama',
        'walas_id',
        'bk_id',
        'jurusan_id'
    ];

    public function walas(){
        return $this->belongsTo(Guru::class, 'walas_id');
    }

    public function bk(){
        return $this->belongsTo(Guru::class, 'bk_id');
    }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }

    public function siswas(){
        return $this->hasMany(Siswa::class);
    }
}
