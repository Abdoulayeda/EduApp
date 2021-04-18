@extends('parentadmin.base')
@section('contenu')

    <div class="container mt-5">

        <h2>Modification de classe dans l'université {{ $classe->universite->libelle  }} </h2>
        <div class="form-group">
            <form action="{{ route('updateclasse', $classe->id) }}" method="post">
                @csrf
                @method('PUT')
                <label>Nom</label>
                <input type="text" name="nom" value="{{ $classe->nom }}" class="form-control">

                <label>Description</label>
                <input type="text" name="description" value="{{ $classe->description }}" class="form-control">



                <input type="hidden"  name="universite_id" value="{{ $classe->universite->id }}" class="form-control" >

                <br>
                <button class="btn btn-primary mt-5">Ajouter</button>

            </form>
        </div>
    </div>

@endsection
