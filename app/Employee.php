<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable =
    [
    	'nom',
    	'prenom',
    	'date_naissance',
    	'sexe',
    	'groupe_sanguin',
    	'adresse_id',
    	'service_id'
    ];

    public function adresse()
    {
    	return $this->belongsTo('App\Adresse');
    }
    public function service()
    {
    	return $this->belongsTo('App\Service');
    }
}
