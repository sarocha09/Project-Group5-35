<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [

        "product_code",
        "image",
        "name",
        "pice",
        "product_type",
        "detail",
        "created_by",
        "updated_by",
        'type_id',

    ];
    protected $primaryKey = 'id_pro'; 

    public function type()
    {
        return $this->belongsTo('App\Typeproduct', 'type_id');
    }

}
