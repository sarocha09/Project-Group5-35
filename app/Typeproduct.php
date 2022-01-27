<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeproduct extends Model
{
    protected $table = 'typeproducts';
    protected $fillable = [

        "name",

    ];
    protected $primaryKey = 'id_type'; 
}
