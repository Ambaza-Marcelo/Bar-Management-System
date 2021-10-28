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

    
}
