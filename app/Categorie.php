<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model 
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = [ 'nom'];

    public function articles()
    {
        return $this->hasMany('App\Article');
    }

}