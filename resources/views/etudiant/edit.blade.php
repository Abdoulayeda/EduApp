@extends('parentadmin.base')
@section('contenu')

    <div class="container">

        <div class="form-group">

            <form action="{{ route('updateetudiant', $etudiant->id) }}" method="post">
                @csrf
                @method('PUT')
                <label for="">Prenom</label>
                <input type="text" name="prenom" value="{{ $etudiant->prenom }}"    class="form-control">

                <label for="">Nom</label>
                <input type="text" name="nom" value="{{ $etudiant->nom }}"  class="form-control">

                <label for="">Téléphone</label>
                <input type="text" name="telephone" value="{{ $etudiant->telephone }}" class="form-control">

                <label for="">Email</label>
                <input type="text" name="email" value="{{ $etudiant->email }}" class="form-control">


                <input type="hidden" name="photo" value="{{ $etudiant->imageEtudiants() }}" class="form-control">

                <input type="hidden" name="classe_id" value="{{ $etudiant->classe->id }}">

                <button class="btn btn-primary">Modifier</button>

            </form>
        </div>

    </div>

@endsection
