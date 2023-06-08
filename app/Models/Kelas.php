<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = [

        'nama',
        'walas_id',
        'bk_id'
    ];

    public function walas(){
        return $this->belongsTo(Guru::class, 'walas_id');
    }

    public function bk(){
        return $this->belongsTo(Guru::class, 'bk_id');
    }
}
