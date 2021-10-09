<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('nom_produit');
            $table->string('stock_initial');
            $table->string('quantite_entree');
            $table->string('prix_achat_unitaire');
            $table->string('quantite_sortie');
            $table->string('prix_vente_unitaire');
            $table->string('prix_vente_total');
            $table->string('prix_achat_total');
            $table->string('stock_total');
            $table->string('stock_restant');
            $table->string('utilisateur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
