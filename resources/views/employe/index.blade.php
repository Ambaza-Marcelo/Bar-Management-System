@extends('layouts.app')
@section('title','liste des employes')
@section('content')
    <section class="container">
            <div class="col-md-12">
                <div class="">
                    <div class="box-header">
                        <div class="">
                            <a class="btn btn-info btn-sm" href="{{ route('creer-employe')}}"> Créer</a>
                        </div>
                        <br>
                    </div>
                    
                            <tbody>
                                @foreach($employes as $employe)
                                <tr>
                                    <td>{{ $loop->index+1}}</td>
                                    <td>{{ $employe->nom}}</td>
                                    <td>{{ $employe->prenom}}</td>
                                    <td>{{ $employe->date_naissance}}</td>
                                    <td>{{ $employe->sexe}}</td>
                                    <td>{{ $employe->adresse->pays}}</td>
                                    <td>{{ $employe->adresse->province}}</td>
                                    <td>{{ $employe->adresse->commune}}</td>
                                    <td>{{ $employe->adresse->zone}}</td>
                                    <td>{{ $employe->adresse->quartier}}</td>
                                    <td>{{ $employe->service->nom_service}}</td>
                                    <td>{{ $employe->service->salaire}} FBU</td>
                                    <td>
                                        <div style="display: flex;">
                                            <div class="btn-group">
                                                <a title="Edit" href="{{ route('editer-employe',$employe->id)}}" class="btn btn-info btn-sm">Editer</a>

                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <form class="myAction" method="POST" action="{{ route('supprimer-employe',$employe->id)}}" onclick="return confirm('voulez-vous vraiment supprimer ?')">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                        <i class="fa fa-fw fa-trash"></i>Supprimer
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
        </div>
    </section>
@endsection

