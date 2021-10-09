@extends('layouts.app')
@section('title','Edit report bar')
@section('content')
<div class="container">
    <div class="container-fluid">
            <div class="col-md-12">
                Creer un rapport 
                <div class="box box-info">
                    <form action="{{ route('modifier-rapport',$reports->id)}}" method="post">
                        <div class="box-body">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="nom_produit">Nom du produit<br><span class="text-black"></span></label>
                                        <input  type="text" class="form-control" name="nom_produit" value="{{$reports->nom_produit}}">
                                        <span class="text-danger">{{ $errors->first('nom_produit') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="stock_initial">Stock Initial</label>
                                        <input type="number" name="stock_initial" class="form-control" value="{{$reports->stock_initial}}">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('stock_initial') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="quantite_entree">Entree</label>
                                        <input type="number" name="quantite_entree" class="form-control" value="{{$reports->quantite_entree}}">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('quantite_entree') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="prix_achat_unitaire">Prix d'achat unitaire</label>
                                        <input type="number" name="prix_achat_unitaire" class="form-control" value="{{$reports->prix_achat_unitaire}}">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('prix_achat_unitaire') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="quantite_sortie">Sortie</label>
                                        <input type="number" name="quantite_sortie" class="form-control" value="{{$reports->quantite_sortie}}">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('quantite_sortie') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="prix_vente_unitaire">Prix de vente unitaire</label>
                                        <input type="number" name="prix_vente_unitaire" class="form-control" value="{{$reports->prix_vente_unitaire}}">
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
                            <button type="submit" class="btn btn-info">Modifier</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
     </div>
 </div>
@endsection