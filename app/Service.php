<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable =
    [
    	'nom_service',
    	'salaire'
    ];

    public function employee()
    {
    	return $this->hasMany('App\Employee','service_id');
    }
}
