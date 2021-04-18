@extends('parentadmin.base')

@section('contenu')

    <div class="container">

    <form action="{{ route('storesite') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
       <label>Libelle</label>
        <input  type="text" name="libelle" class="form-control">
            <label>photo</label>
            <input type="file" name="photo" class="form-control-file">
        <label>Descrtiption</label> <br>
            <textarea name="description" class="form-control"  cols="30" rows="10"></textarea>
            <button class="btn btn-primary mt-5">Ajouter</button>
        </div>
    </form>



</div>
@endsection
