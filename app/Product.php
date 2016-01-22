<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    public $timestamps = false;

    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

}
