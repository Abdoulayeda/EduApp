@extends('parentadmin.base')
@section('contenu')

    <div class="container mt-5">
        <h2>Liste des classes</h2>
        {{-- <div>
             <a href="{{ route('classes.create') }}">Ajouter une classe</a>
         </div>--}}

        {{--  <div>
              @if(session('classeedit'))
                  <div class="alert alert-success" role="alert">
                      {{ session('classeedit') }}
                  </div>
              @endif
              @if(session('classesave'))
                  <div class="alert alert-success" role="alert">
                      {{ session('classesave') }}
                  </div>
              @endif
              @if(session('classedelete'))
                  <div class="alert alert-danger" role="alert">
                      {{ session('classedelete') }}
                  </div>
              @endif

          </div>--}}
        <table class=" table table-striped">
            <thead>
            <th>Numéro</th>
            <th>nom</th>
            <th>Description</th>
            <th>Université</th>
            <th>Action</th>
            </thead>

            <tbody>
            @foreach($universite->classes as $key=>$classe )
                <tr>
                    <td>{{ $key +1 }}</td>
                    <td>{{ $classe->nom }}</td>
                    <td>{{ $classe->description }}</td>
                    <td>{{ $classe->universite->libelle }}</td>
                    <td>
                        <a href="{{ route('editclasse', $classe->id) }}">
                            <div class="icon" >
                                <i class="bi bi-pencil-fill" style="font-size:30px "></i>
                            </div>
                        </a>
                    </td>

                    <td>
                        <form action="{{ route('destroyclasse', $classe->id) }}" method="post" onclick="return confirm('Etes sùr de vouloir supprimer?');">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">
                                <div class="icon">
                                    <i class="bi bi-trash" style="font-size:30px "></i>
                                </div>

                            </button>
                        </form>

                    </td>
                    <td>
                        <a href="{{ route('listeetudiant', $classe->id) }}">Voir les etudiants</a>

                    </td>
                    <td>
                        <div>
                            <a href="{{ route('createetudiant', $classe->id) }}">Ajouter un etudiant</a>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>


        </table>

    </div>


@endsection
