@extends('layouts.app')
@section('title','modifier employe')
@section('content')
<div class="container">
    <div class="container-fluid">
            <div class="col-md-12">
                Creer un employe 
                <div class="box box-info">
                    <form action="{{ route('modifier-employe',$employe->id)}}" method="post">
                        
                                    <div class="form-group has-feedback">
                                        <label for="prenom">Prenom<br><span class="text-black"></span></label>
                                        <input  type="text" class="form-control" name="prenom" value="{{$employe->prenom}}">
                                        <span class="text-danger">{{ $errors->first('prenom') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="date_naissance">A/N</label>
                                        <input type="date" name="date_naissance" class="form-control" value="{{ $employe->date_naissance}}">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('date_naissance') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="sexe">Sexe</label>
                                        <select class="form-control" name="sexe">
                                            <option selected="">choisir sexe</option>
                                            <option value="femelle">femelle</option>
                                            <option value="male">male</option>
                                        </select>
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('sexe') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="groupe_sanguin">groupe sanguin</label>
                                        <select class="form-control" name="groupe_sanguin">
                                            <option selected="">choisir groupe sanguin</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="o+">o+</option>
                                        </select>
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('groupe_sanguin') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="adresse_id">Adresse</label>
                                        <select name="adresse_id" class="form-control">
                                            <option selected="">choisir adresse</option>
                                            @foreach($adresse as $add)
                                            <option value="{{$add->id}}">{{$add->pays}},{{$add->province}},{{$add->commune}},{{$add->zone}},{{$add->quartier}}</option>
                                            @endforeach
                                        </select>
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('adresse_id') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="service_id">Service</label>
                                        <select name="service_id" class="form-control">
                                            <option selected="">choisir service</option>
                                            @foreach($service as $serv)
                                            <option value="{{$serv->id}}">{{ $serv->nom_service}}</option>
                                            @endforeach
                                        </select>
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('service_id') }}</span>
                                    </div>
                                </div>
                            </div>
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