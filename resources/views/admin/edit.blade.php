@extends('parentadmin.base')

@section('contenu')

    <div class="container">
    <form action="{{ route('updatesite', $universite->id) }}" method="POST">
       @method('PUT')
        @csrf
        <label for="">Labelle</label>
        <input type="text" name="libelle" value="{{$universite->libelle}}" class="form-control">

        <label for="">Description</label>
        <input type="text" name="description" value="{{ $universite->description }}" class="form-control">

        <button class="btn btn-primary">Modifier</button>
    </form>

</div>

@endsection
