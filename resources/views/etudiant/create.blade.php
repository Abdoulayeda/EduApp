@extends('parentadmin.base')
@section('contenu')

    <div class="container">
<h2>Ajout d'un étudiant dans la classe {{ $classe->nom }}</h2>
        <div class="form-group">
            <form action="{{ route('storeetudiant') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">Prenom</label>
                <input type="text" name="prenom" class="form-control">

                <label for="">Nom</label>
                <input type="text" name="nom" class="form-control">

                <label for="">Téléphone</label>
                <input type="text" name="telephone" class="form-control">

                <label for="">Email</label>
                <input type="text" name="email" class="form-control">

                <label>photo</label>
                <input type="file" name="photo" class="form-control-file">
                <input type="hidden" name="classe_id" value="{{ $classe->id }}">

                <button class="btn btn-primary">Ajouter</button>

            </form>
        </div>

    </div>

@endsection
