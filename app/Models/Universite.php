<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universite extends Model
{
    use HasFactory;

    public function classes()
    {
        return $this->hasMany(Classe::class,'universites_id');
    }



    public function imagePrincipale()
    {
        return asset('storage/imageuniversites/'.$this->photo);
    }
}
