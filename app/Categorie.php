<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = "categorie";

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany('App\Product');
    }

}
