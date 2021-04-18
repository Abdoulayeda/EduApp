@extends('parent')
@section('content')


    <div class="container" >

       <div class="row">
           <div class="col-lg-8">
               <div class="card-title" style="font-size: 4rem">
                   {{ $universite->libelle }}
               </div>
               <div class="img-fluid mt-5">
                   <img src=" {{ $universite->imagePrincipale()  }}" alt="" height="600" width="880">
               </div>

               {{ $universite->description }}
           </div>

           <div class="col-lg-4">
               <h3>Liste des classes de {{ $universite->libelle }}</h3>
               <ul>
                   @foreach($universite->classes as $classe)
                              <li style="font-size: 2rem"> {{ $classe->nom }}</li>
                   @endforeach
               </ul>


           </div>

       </div>

    </div>




@endsection
