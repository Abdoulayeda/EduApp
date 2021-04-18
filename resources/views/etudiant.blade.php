{{--
@extends('parent')
@section('content')


    <div class="container">

        <h2>Liste des etudiant de la classe {{ $classe->nom }}</h2>
        <table class="table table-striped">
            <thead>
            <th>Numéro</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Tel</th>
            <th>Email</th>
            <th>Photo</th>
            </thead>


            @foreach($classe->etudiants as $key=>$etudiant )
                <tbody>
                <tr>
                    <td>{{ $key +1 }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->telephone }}</td>
                    <td>{{ $etudiant->email }}</td>
                    <td>
                        <img src=" {{ asset('/images/'.$etudiant->photoprofil)  }}" alt="" width="150" height="120">
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>

    </div>


@endsection
--}}
