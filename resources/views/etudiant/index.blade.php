@extends('parentadmin.base')
@section('contenu')

    <div class="container mt-5">
        <h2>Liste des etudiants de la classe {{ $classe->nom  }}</h2>
        <div>
            @if(session('storeetudiant'))
                <div class="alert alert-success" role="alert">
                    {{ session('storeetudiant') }}
                </div>
            @endif
            @if(session('updateetudiant'))
                <div class="alert alert-success" role="alert">
                    {{ session('updateetudiant') }}
                </div>
            @endif
            @if(session('deleteetudiant'))
                <div class="alert alert-danger" role="alert">
                    {{ session('deleteetudiant') }}
                </div>
            @endif

        </div>

        <table class=" table table-striped">
            <thead>
            <th>Numéro</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Photo</th>
            <th>Classe</th>
            <th>Action</th>
            </thead>

            <tbody>
            @foreach($classe->etudiants as $key=>$etudiant )
                <tr>
                    <td>{{ $key +1 }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->telephone }}</td>
                    <td>{{ $etudiant->email }}</td>
                    <td>
                        <img src=" {{ $etudiant->imageEtudiants() }}" alt="" width="150" height="120">
                    </td>
                    <td>{{ $etudiant->classe->nom }}</td>
                    <td>
                        <a href="{{ route('editetudiant', $etudiant->id) }}">
                            <div class="icon" >
                                <i class="bi bi-pencil-fill" style="font-size:30px "></i>
                            </div>
                        </a>
                    </td>
                    <td>
                     <form action="{{route('destroyetudiant',$etudiant->id) }}" method="post" onclick="return confirm('Etes sùr de vouloir supprimer?');">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">
                                <div class="icon">
                                    <i class="bi bi-trash" style="font-size:30px "></i>
                                </div>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>


        </table>

    </div>


@endsection
