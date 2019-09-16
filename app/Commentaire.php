<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model 
{

    protected $table = 'commentaires';
    public $timestamps = true;
    protected $fillable=[ 'nom_auteur_comment','contenu','article_id'];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}