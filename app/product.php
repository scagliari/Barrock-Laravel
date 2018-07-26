<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'ID';
    protected $keyType = 'string';
    public $timestamps = false;// con este atributo le digo a LARAVEL que no agregue esas dos columnas
                                //(created thah y updated that) que hace por convention, el atributo tiene que se PUBLIC

    protected $guarded = []; // un $guarded vacio significa que todo es fillable

}
