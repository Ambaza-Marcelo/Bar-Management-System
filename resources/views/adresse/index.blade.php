@extends('layouts.app')
@section('title','liste des adresses')
@section('content')
    <section class="container">
        
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

