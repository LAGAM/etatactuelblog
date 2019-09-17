<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model 
{

    protected $table = 'tags';
    public $timestamps = true;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tag', 'tag_url'
    ];

    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }

}