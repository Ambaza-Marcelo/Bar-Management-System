@extends('layouts.app')
@section('title','modifier adresse')
@section('content')
<div class="container">
    <div class="container-fluid">
            <div class="col-md-12">
                modifier adresse 
                <div class="box box-info">
                    <form action="{{ route('modifier-adresse',$adresse->id)}}" method="post">
                        <div class="box-body">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="pays">pays<br><span class="text-black"></span></label>
                                        <input  type="text" class="form-control" name="pays" value="{{$adresse->pays}}">
                                        <span class="text-danger">{{ $errors->first('pays') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="province">Province<br><span class="text-black"></span></label>
                                        <input  type="text" class="form-control" name="province" value="{{$adresse->province}}">
                                        <span class="text-danger">{{ $errors->first('province') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="commune">commune</label>
                                        <input type="text" name="commune" class="form-control" value="{{$adresse->commune}}">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('commune') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="zone">Zone</label>
                                        <input type="text" name="zone" class="form-control" value="{{$adresse->zone}}">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('zone') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="quartier">Quartier/colline</label>
                                        <input type="text" name="quartier" class="form-control" value="{{$adresse->quartier}}">
                                        <span class="fa fa-location-arrow form-control-feedback"></span>
                                        <span class="text-danger">{{ $errors->first('quartier') }}</span>
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