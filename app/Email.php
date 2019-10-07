<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    //
    protected $table = 'email';
    public $timestamps = true;
    protected $fillable = [ 'emails'];
}
