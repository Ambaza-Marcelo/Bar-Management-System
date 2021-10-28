<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    //Adresse model
    protected $fillable=
    [
    	'pays','province',
    	'commune','zone','quartier'
    ];

    //relation between employee and adress
    public function employee()
    {
    	return $this->hasMany('App\Employee','adresse_id');
    }
}
