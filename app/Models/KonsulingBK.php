<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsulingBK extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function siswas(){
        return $this->belongsToMany(Siswa::class, 'siswa_konsuling', 'konsuling_b_k_id', 'siswa_id');
    }
}