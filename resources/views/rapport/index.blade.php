@extends('layouts.app')
@section('title','report bar list')
@section('content')
    <section class="container">
            <div class="col-md-12">
                <div class="">
                    <div class="box-header">
                        <h3 class="box-title">Rapport</h3>
                        <div class="">
                            <a class="btn btn-info btn-sm" href="{{route('creer-rapport')}}"><i class="fa fa-plus-circle"></i> Créer</a>
                        </div>
                        <br>
                    </div>
                    <div class="">
                        <table id="products" class="table table-bordered table-striped list_view_table">
                            <thead>
                            <tr>
                                <th width="10%">#</th>
                                <th width="10%">Date</th>
                                <th width="10%">Nom du produit</th>
                                <th width="10%">Stock Initial</th>
                                <th width="10%">Quantite Entree</th>
                                <th width="10%">Prix d'achat unitaire</th>
                                <th width="10%">Prix d'achat total</th>
                                <th width="10%">Stock Total</th>
                                <th width="10%">Quantite Sortie</th>
                                <th width="10%">Prix de vente unitaire</th>
                                <th width="10%">Prix de vente total</th>
                                <th width="10%">Stock Restant</th>
                                <th width="15%">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reports as $report)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>Le {{ \Carbon\Carbon::parse($report->created_at)->format('d/m/Y') }}</td>
                                    <td>{{ $report->nom_produit }}</td>
                                    <td> {{ $report->stock_initial }} </td>
                                    <td>{{ $report->quantite_entree }}</td>
                                    <td> {{ $report->prix_achat_unitaire }} FBU</td>
                                    <td> {{ $report->prix_achat_total }} FBU</td>
                                    <td> {{ $report->stock_total }}</td>
                                    <td>{{ $report->quantite_sortie }}</td>
                                    <td> {{ $report->prix_vente_unitaire }} FBU</td>
                                    <td>{{ $report->prix_vente_total }} FBU</td>
                                    <td> {{ $report->stock_restant }} </td>
                                    <td>
                                    <div style="display: flex;">
                                        <div class="btn-group">
                                            <a title="Edit" href="{{ route('editer-rapport',$report->id)}}" class="btn btn-info btn-sm">Editer</a>

                                            </a>
                                        </div>
                                        <div class="btn-group">
                                            <form class="myAction" method="POST" action="{{route('supprimer-rapport',$report->id)}}" onclick="return confirm('voulez-vous vraiment supprimer ?')">
                                                {{ method_field('DELETE') }}
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer">
                                                Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$reports->links()}}
                    </div>




                    <div class="">
                        rapport des boissons par jour
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th width="10%">Date</th>
                                <th width="10%">T.P.A</th>
                                <th width="10%">T.P.V</th>
                                <th width="10%">Depense Total</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rapportGeneralParJours as $rapportGeneralParJour)
                                <tr>
                                    <td>Le {{ $rapportGeneralParJour->day }}/{{ $rapportGeneralParJour->month }}/{{ $rapportGeneralParJour->year }}</td>
                                    <td> {{ $rapportGeneralParJour->total_prix_achat }} FBU</td>
                                    <td> {{ $rapportGeneralParJour->total_prix_vente }} FBU</td>
                                    
                                   
                                    @foreach($expenseParJours as $expenseParJour)
                                    
                                    @if ($rapportGeneralParJour->day == $expenseParJour->day && $rapportGeneralParJour->month == $expenseParJour->month && $rapportGeneralParJour->year == $expenseParJour->year)
                                    
                                    <td class="alert alert-warning">{{$expenseParJour->total_expense}} FBU</td>
                                    @endif
                                    
                                @endforeach
                                    
                                </tr>
                                
                            @endforeach

                            </tbody>
                        </table>
                        {{$rapportGeneralParJours->links()}}
                </div>

                    <div class="">
                        rapport des boissons par mois
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th width="15%">Mois</th>
                                <th width="10%">Annee</th>
                                <th width="10%">T.P.A</th>
                                <th width="10%">T.P.V</th>
                                <th width="10%">Depense Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rapportGeneralParMois as $rapportGeneral)
                                
                                <tr>
                                    <td>{{ $rapportGeneral->month }}</td>
                                    <td>{{ $rapportGeneral->year }}</td>
                                    <td> {{ $rapportGeneral->total_prix_achat }} FBU</td>
                                    <td> {{ $rapportGeneral->total_prix_vente }} FBU</td>
                                   
                                   @foreach($expenseParMois as $expense)
                                        @if($rapportGeneral->month == $expense->month && $rapportGeneral->year == $expense->year)
                                      
                                        <td class="alert alert-warning">{{$expense->total_expense}} FBU</td>
                                        @endif
                                    @endforeach  
                                    
                                </tr>
                                
                            @endforeach

                            </tbody>
                        </table>
                        {{$rapportGeneralParMois->links()}}
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection

