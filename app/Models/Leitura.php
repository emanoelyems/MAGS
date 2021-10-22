<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Leitura extends Model
{

    use HasFactory;

    public function bico(){ 
        return $this->hasOne(Bico::class, 'id', 'bico_id');
    }

    public function turno(){ 
        return $this->hasOne(Turno::class, 'id', 'turno_id');
    }

}
