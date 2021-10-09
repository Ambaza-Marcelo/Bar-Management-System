@extends('layouts.app')
@section('title','create report bar')
@section('content')
<div class="container">
    <div class="container-fluid">
            <div class="col-md-12">
                Creer un rapport 
                <div class="box box-info">
                    <form action="{{ route('enregistrer-rapport')}}" method="post">
                        <div class="box-body">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="nom_produit">Nom du produit<br><span class="text-black"></span></label>
                                        <input  type="text" class="form-control" name="nom_produit" placeholder="nom du produit">
                                        <span class="text-danger">{{ $errors->first('nom_produit') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="stock_initial">Stock Initial</label>
                                        <input type="number" name="stock_initial" class="form-control" placeholder="stock initial">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('stock_initial') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="quantite_entree">Entree</label>
                                        <input type="number" name="quantite_entree" class="form-control" placeholder="Quantite Entree">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('quantite_entree') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="prix_achat_unitaire">Prix d'achat unitaire</label>
                                        <input type="number" name="prix_achat_unitaire" class="form-control" placeholder="prix d'achat unitaire">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('prix_achat_unitaire') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="quantite_sortie">Sortie</label>
                                        <input type="number" name="quantite_sortie" class="form-control" placeholder="Quantite Sortie">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('quantite_sortie') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="prix_vente_unitaire">Prix de vente unitaire</label>
                                        <input type="number" name="prix_vente_unitaire" class="form-control" placeholder="prix de vente unitaire">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('prix_vente_unitaire') }}</span>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="prix_vente_total">
                            <input type="hidden" name="prix_achat_total">
                            <input type="hidden" name="stock_total">
                            <input type="hidden" name="stock_restant">
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info">Enregistrer</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
     </div>
 </div>
@endsection