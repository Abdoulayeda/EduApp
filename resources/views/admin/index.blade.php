@extends('parentadmin.base')
@section('contenu')

    <div class="container">
        <div>
            @if(session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            @if(session('messagemodifie'))
                <div class="alert alert-success" role="alert">
                    {{ session('messagemodifie') }}
                </div>
            @endif
            @if(session('messagedelete'))
                <div class="alert alert-danger" role="alert">
                    {{ session('messagedelete') }}
                </div>
            @endif

        </div>
        <div>
            <h2>Liste des universités</h2>
        </div>

        <a href="{{ route('createsite') }}">
            <div class="btn btn-primary"> Ajouter une université  </div>
        </a>


        <table class="table table-striped mt-5" >
            <thead>
            <th>Numéro</th>
            <th>Libelle</th>
            <th>Description</th>
            <th>Photo</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            <th>Voir les classes</th>
            <th>Ajout de classe</th>
            </thead>

            <tbody>
            @foreach( $universites as $key=>$universite)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td> {{ $universite->libelle }}</td>
                    <td>{{  substr($universite->description, 0, 30)  }}</td>
                    <td><img src="{{$universite->imagePrincipale()  }}" alt="" width="100" height="100"></td>
                    <td>

                      <button class="btn btn-warning">
                          <a href="{{ route('editsite',$universite->id) }}">
                              <div class="icon">
                                  <i class="bi bi-pencil-fill" style="font-size:30px "></i>
                              </div>
                          </a>
                      </button>
                    </td>
                    <td>
                        <form action="{{ route('destroysite',$universite->id)}}" method="post"  onclick="return confirm('Etes sùr de vouloir supprimer?');">
                            @method('DELETE')
                            @csrf
                            <button  class="btn btn-danger" >

                                <div class="icon">
                                    <i class="bi bi-trash" style="font-size:30px "></i>
                                </div>

                            </button>
                        </form>

                    </td>
                    <td>
                        <button class="btn btn-dark">
                            <a href="{{ route('classeliste',$universite) }}">
                                <div class="icon" >
                                    <i class="bi bi-eye-fill" style="font-size: 30px "></i>
                                </div>
                            </a>
                        </button></td>
                    <td>
                        <a href="{{ route('createclasse', $universite) }}">Ajouter une classe</a>
                    </td>

                </tr>


            @endforeach

            </tbody>
        </table>

    </div>

@endsection

