@extends('layouts.app')
@section('title','liste des adresses')
@section('content')
    <section class="container">
            <div class="col-md-12">
                <div class="">
                    <div class="box-header">
                        <div class="">
                            <a class="btn btn-info btn-sm" href="{{ route('creer-adresse')}}">Créer</a>
                        </div>
                        <br>
                    </div>
                    <div class="">
                        <table id="products" class="table table-bordered table-striped list_view_table">
                            <thead>
                            <tr>
                                <th width="10%">#</th>
                                <th width="10%">Pays</th>
                                <th width="10%">Province</th>
                                <th width="10%">Commune</th>
                                <th width="10%">Zone</th>
                                <th width="10%">Quartier/Colline</th>
                                <th width="15%">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                                @foreach($adresses as $adresse)
                                <tr>
                                    <td>{{ $loop->index + 1}}</td>
                                    <td>{{ $adresse->pays}}</td>
                                    <td>{{ $adresse->province}}</td>
                                    <td>{{ $adresse->commune}}</td>
                                    <td>{{ $adresse->zone}}</td>
                                    <td>{{ $adresse->quartier}}</td>
                                    <td>
                                    <div style="display: flex;">
                                        <div class="btn-group">
                                            <a title="Edit" href="{{ route('editer-adresse',$adresse->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Editer</a>

                                            </a>
                                        </div>
                                        <div class="btn-group">
                                            <form class="myAction" method="POST" action="{{ route('supprimer-adresse',$adresse->id)}}" onclick="return confirm('voulez-vous vraiment supprimer ?')">
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

