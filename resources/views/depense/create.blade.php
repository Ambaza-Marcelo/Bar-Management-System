@extends('layouts.app')
@section('title','creer les depenses')
@section('content')
		<div class="container">
			  <h2>creer les depenses</h2>
			  <form class="form-horizontal" method="POST" action="{{ route('enregistrer-depenses')}}">
			  	{{ csrf_field() }}
                <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                    <label for="date" class="col-md-4 control-label">Date</label>

                    <div class="col-md-6">
                        <input type="date" name="date" class="form-control" placeholder="Date">

                        @if ($errors->has('date'))
                            <span class="help-block">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
			    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title" class="col-md-4 control-label">Description</label>

                    <div class="col-md-6">
                        <textarea class="form-control" name="title">
                            
                        </textarea>

                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
			   <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">
                    <label for="total" class="col-md-4 control-label">@lang('Montant')</label>

                    <div class="col-md-6">
                        <input type="number" name="total" class="form-control" placeholder="Montant">

                        @if ($errors->has('total'))
                            <span class="help-block">
                                <strong>{{ $errors->first('total') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
			    <div class="form-group">        
			      <div class="col-sm-offset-4 col-sm-10">
			        <button type="submit" class="btn btn-default">Enregistrer</button>
			      </div>
			    </div>
			  </form>
		</div>
	@endsection