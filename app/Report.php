<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $fillable = [
    	'nom_produit',
    	'stock_initial',
    	'quantite_entree',
    	'prix_achat_unitaire',
    	'quantite_sortie',
    	'prix_vente_unitaire',
    	'prix_vente_total',
    	'prix_achat_total',
    	'stock_total',
    	'stock_restant',
        'utilisateur'
    ];


}
