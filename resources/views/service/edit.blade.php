@extends('layouts.app')
@section('title','modifier service')
@section('content')
<div class="container">
    <div class="container-fluid">
            <div class="col-md-12">
                modifier un service 
                <div class="box box-info">
                    <form action="{{ route('modifier-service',$service->id)}}" method="post">
                        <div class="box-body">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="nom_service">Nom du service<br><span class="text-black"></span></label>
                                        <input  type="text" class="form-control" name="nom_service" value="{{ $service->nom_service}}">
                                        <span class="text-danger">{{ $errors->first('nom_service') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="salaire">Salaire<br><span class="text-black"></span></label>
                                        <input  type="number" class="form-control" name="salaire" value="{{$service->salaire}}">
                                        <span class="text-danger">{{ $errors->first('salaire') }}</span>
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