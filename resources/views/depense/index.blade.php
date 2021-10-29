@extends('layouts.app')
@section('title','les depenses')
@section('content')
	<div class="container">
		<div style="margin-top: 10px;">        
			      <div class=" col-sm-10">
			        <a href="{{ route('creer-depenses') }}" class="btn btn-info">+Creer</a>
			      </div>
		
		      @foreach($expenses as $expense)     
		      <tr class="success">
		        <td>{{$expense->id}}</td>
		        <td>Le {{ \Carbon\Carbon::parse($expense->date)->format('d/m/Y') }}</td>
		        <td>{{$expense->title}}</td>
		        <td>{{$expense->total}} Fbu</td>
		        @if(Auth::user()->role == 'admin')
		        <td>
		        	<div style="display: flex;">
                        <div class="btn-group">
                            <a title="Edit" href="{{ route('editer-depense',$expense->id)}}" class="btn btn-info btn-sm">Editer</a>

                            </a>
                        </div>
                        <div class="btn-group">
                            <form class="myAction" method="POST" action="{{ route('supprimer-depenses',$expense->id)}}" onclick="return confirm('voulez-vous vraiment supprimer?')">
                                                {{ method_field('DELETE') }}
                                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
		        </td>
		        @endif
		      </tr>
		      @endforeach
		    </tbody>
		  </table>
		  {{$expenses->links()}}
		  liste des depenses par jour
		  <table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>Date</th>
		        <th>Montant</th>
		      </tr>
		    </thead>
		    <tbody>
		      @foreach($expenseParJours as $expenseParJour)     
		      <tr>
		        <td class="alert alert-danger">Le {{$expenseParJour->day}}/{{$expenseParJour->month}}/{{$expenseParJour->year}}</td>
		        <td class="alert alert-warning">{{$expenseParJour->total_expense}} Fbu</td>
		      </tr>
		      @endforeach
		    </tbody>
		  </table>
		  {{$expenseParJours->links()}}
		  liste des depenses par mois
		  <table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>#</th>
		        <th>Mois</th>
		        <th>Annee</th>
		        <th>Montant</th>
		      </tr>
		    </thead>
		    <tbody>
		      @foreach($expenseParMois as $expense)     
		      <tr>
		        <td class="alert alert-warning">{{$loop->index+1}}</td>
		        <td class="alert alert-danger">{{$expense->month}}</td>
		        <td class="alert alert-info">{{$expense->year}}</td>
		        <td class="alert alert-warning">{{$expense->total_expense}} Fbu</td>
		      </tr>
		      @endforeach
		    </tbody>
		  </table>
		  {{$expenseParMois->links()}}
	</div>
	
@endsection