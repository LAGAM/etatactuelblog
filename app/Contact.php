<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = 'contact';
    public $timestamps = true;
    protected $fillable = [ 'email','nom','message'];
}
