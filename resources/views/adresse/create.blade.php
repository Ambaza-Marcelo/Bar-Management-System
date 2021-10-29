@extends('layouts.app')
@section('title','creer adresse')
@section('content')
<div class="container">
    <div class="container-fluid">
            <div class="col-md-12">
                Creer adresse 
                <div class="box box-info">
                    <form action="{{ route('enregistrer-adresse')}}" method="post">
                        <div class="box-body">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="pays">pays<br><span class="text-black"></span></label>
                                        <input  type="text" class="form-control" name="pays" placeholder="pays">
                                        <span class="text-danger">{{ $errors->first('pays') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="province">Province<br><span class="text-black"></span></label>
                                        <input  type="text" class="form-control" name="province" placeholder="province">
                                        <span class="text-danger">{{ $errors->first('province') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="commune">commune</label>
                                        <input type="text" name="commune" class="form-control" placeholder="Commune">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('commune') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="zone">Zone</label>
                                        <input type="text" name="zone" class="form-control" placeholder="zone">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('zone') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="quartier">Quartier/colline</label>
                                        <input type="text" name="quartier" class="form-control" placeholder="Quartier/Colline">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('quartier') }}</span>
                                    </div>
                                </div>
                            </div>
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