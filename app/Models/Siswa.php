<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
    
    public function konsulings(){
        return $this->belongsToMany(KonsulingBK::class, 'siswa_konsuling', 'siswa_id', 'konsuling_b_k_id');
    }

    public function fotos(){
        $foto = Foto::where('model_type', 'siswa')->where('model_id', $this->id)->get();

        return $foto;
    }

    public function kerawanans(){
        return $this->belongsToMany(JenisKerawanan::class, 'siswa_kerawanan', 'siswa_id', 'jenis_kerawanan_id');
    }

    public function hasilKerawanan(){
        return $this->hasOne(HasilKerawanan::class, 'siswa_id');
    }

}

