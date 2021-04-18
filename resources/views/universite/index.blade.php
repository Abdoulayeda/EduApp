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

        <a href="{{ route('universites.create') }}">
            <div class="btn btn-primary"> Ajouter une université  </div>
        </a>


    <table class="table table-striped mt-5" >
        <thead>
        <th>Numéro</th>
        <th>Libelle</th>
        <th>Description</th>
        <th>Photo</th>
        <th></th>
        <th>Action</th>
        </thead>

        <tbody>
           @foreach( $universites as $key=>$universite)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td> {{ $universite->libelle }}</td>
                <td>{{ $universite->description }}</td>
                <td><img src="{{   $universite->imagePrincipale()  }}" alt="" width="100" height="100"></td>
                <td>
                    <a href="{{ route('universites.edit', $universite->id) }}">
                        <div class="icon">
                            <i class="bi bi-pencil-fill" style="font-size:30px "></i>
                        </div>
                  </a>
                </td>
                <td>
                    <form action="{{route('universites.destroy',$universite->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">
                            <div class="icon">
                                <i class="bi bi-trash" style="font-size:30px "></i>
                            </div>

                        </button>
                    </form>
                    </form>
                </td>
                <td>Voir les classes</td>

                <td>
                    <a href="{{ route('classes.create', $universite->id) }}">Ajouter une classe</a>
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>

</div>

  @endsection
