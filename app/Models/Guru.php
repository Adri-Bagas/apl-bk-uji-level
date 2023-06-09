<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function bk_kelas(){
        return $this->hasMany(Kelas::class, 'bk_id');
    }

    public function walas_kelas(){
        return $this->hasOne(Kelas::class, 'walas_id');
    }

    public function bk_konsuling(){
        return $this->hasMany(KonsulingBK::class, 'bk_id');
    }

    public function fotos(){
        $foto = Foto::where('model_type', 'guru')->where('model_id', $this->id)->get();

        return $foto;
    }
}
