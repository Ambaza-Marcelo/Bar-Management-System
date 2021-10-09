<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    //
    protected $fillable=
    [
    	'pays','province',
    	'commune','zone','quartier'
    ];

    public function employee()
    {
    	return $this->hasMany('App\Employee','adresse_id');
    }
}
