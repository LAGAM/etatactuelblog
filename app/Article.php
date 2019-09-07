<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model 
{

    protected $table = 'articles';
    public $timestamps = true;
    protected $fillable = ['titre','user_id', 'enligne','categorie_id','contenu', 'chapeau','image'];

    


    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function categories()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function commentaires()
    {
        return $this->hasMany('App\Commentaire');
    }

   /* public function medias()
    {
        return $this->hasMany('App\Media');
    }*/

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

}