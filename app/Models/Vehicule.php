<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getStatusAttribute($attributes){

        return $this->getStatusOptions()[$attributes];
    }

    public function getCarburantOptions(){

        return [

            'Gasoil'=>'Gasoil',
            'Diesel'=>'Diesel',
            'Essence'=>'Essence',   
        ];

    }
}
