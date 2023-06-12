<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function fotos(){
        $foto = Foto::where('model_type', 'seminar')->where('model_id', $this->id)->get();

        return $foto;
    }
}
