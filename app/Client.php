<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $table = 'client';
	public $timestamps = false;

    //Declarando quals inputs do form
    protected $fillable = [
    	'name',
    	'email'
    ];
}
