@extends('parentadmin.base')
@section('contenu')

    <div class="container mt-5">
       <h2>Ajout de classe dans l'université {{ $universite->libelle }}</h2>
        <div class="form-group">
            <form action="{{ route('storeclasse') }}" method="post">
                @csrf
                <label>Nom</label>
                <input type="text" name="nom" class="form-control">

                <label>Description</label><br>
{{--                <input type="text" name="description" class="form-control">--}}
                <textarea name="description" id="" cols="50" rows="10" class="form-control"></textarea>

                <input type="hidden"  name="universite_id" class="form-control" value="{{ $universite->id }}">

                <br>
                <button class="btn btn-primary mt-5">Ajouter</button>

            </form>
        </div>

    </div>



@endsection
