<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //Declarando quals inputs do form
    protected $fillable = {
    	'name',
    	'email'
    };
}
