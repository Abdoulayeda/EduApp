<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Universite;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    // Les fonctions pour l'université
    public function index()
    {
        $universites = Universite::all();
        return view('admin.index')->with(compact('universites'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
      /*  $request->validate([
           'libelle'=>'unique',
            'description'=>'min:10'
        ]);*/
        $universite = new Universite();

        $image = $request->file('photo');
        $nomimage = 'produit'.time().'.'.$image->getClientOriginalExtension();
        $path = $image->storeAS('imageuniversites',$nomimage);


        $universite->libelle = $request->libelle;
        $universite->photo = $nomimage;
        $universite->description=$request->description;
        $universite->save();
        return redirect()->route('root')->with('message','Université ajouté avec success');
    }

    public function edit($id)
    {
        $universite=Universite::find($id);
        return view('admin.edit')->with('universite',$universite);
    }

    public function update(Request $request,$id)
    {
     /*   $request->validate([
            'libelle'=>'unique',
            'description'=>'min:10'
        ]);*/
        $universite=Universite::find($id);
        $universite->libelle = $request->libelle;
        $universite->description = $request->description;
        $universite->save();
       return redirect()->route('root')->with('messagemodifie', 'Université modifié avec success');
    }


 public function destroy($id)
 {
     $universite = Universite::find($id);
     $universite->delete($id);
     return redirect()->route('root')->with('messagedelete', 'Université supprimé avec success');

 }

 // Les fonctions pour la classe

 // On creer une fonction createecole qui va créer une ecole en fonction d'une université

    Public function classeindex($id)
    {
        $universite = Universite::find($id);
        return view('classe.index')->with(compact('universite'));

    }

    public function classecreate($id)
    {
        $universite=Universite::find($id);
        return view('classe.create')->with(compact('universite'));
    }

    public function classestore(Request $request)
    {
        $classe = new Classe();
        $classe->nom = $request->nom;
        $classe->description = $request->description;
        $classe->universites_id = $request->universite_id;
        $classe->save();
      //  return redirect()->route('root')->with('classecreate', 'Classe créer avec success');
    }

    public function classeedit($id)
    {
       $universite = Universite::find($id);
        $classe = Classe::find($id);
        return view('classe.edit')->with(compact('classe','universite'));
    }

    public function classeupdate(Request $request, $id)
    {
        $classe = Classe::find($id);
        $classe->nom = $request->nom;
        $classe->description = $request->description;
        $classe->universites_id = $request->universite_id;

        $classe->save();
        return redirect()->route('root')->with('classeedit', 'Classe modifié avec success');

    }

    public function classedestroy($id)
    {
        $classe = Classe::find($id);
        $classe->delete($id);
        return redirect()->route('root')->with('classedelete', 'Classe supprimer avec success');

    }


/*
 *Les fonctionc pour les etudiants
 */

    public function etudiantindex($id)
    {
        $classe = Classe::find($id);
        return view('etudiant.index')->with(compact('classe'));

    }



    public function etudiantcreate($id)
    {
        $classe = Classe::find($id);
        return view('etudiant.create')->with(compact('classe'));
    }

    public function etudiantstore(Request $request)
    {

        $request->validate([
            'email'=>'required|unique:etudiants',
            'telephone'=>'required|unique:etudiants',
            'nom'=>'required|min:2|max:50',
            'prenom'=>'required|min:3'
        ]);
        $etudiant = new Etudiant();
        $image = $request->file('photo');
        $nomimage = 'etudiant'.time().'.'.$image->getClientOriginalExtension();
        $path = $image->storeAS('imageetudiants',$nomimage);
        $etudiant->prenom = $request->prenom;
        $etudiant->nom = $request->nom;
        $etudiant->email = $request->email;
        $etudiant->telephone = $request->telephone;
        $etudiant->photoprofil = $nomimage;
        $etudiant->classes_id = $request->classe_id;
        $etudiant->save();
        return redirect()->route('root')->with('etudiantcreate', 'Etudiant créer avec success');
    }


    public function etudiantedit($id)
    {
        $etudiant = Etudiant::find($id);
        return view('etudiant.edit')->with(compact('etudiant'));
    }

    public function etudiantupdate(Request $request, $id)
    {
        $request->validate([
            'email'=>'required|unique:etudiants',
            'telephone'=>'required|unique:etudiants',
            'nom'=>'required|min:2|max:50',
            'prenom'=>'required|min:3'
        ]);
        $etudiant = Etudiant::find($id);
        $etudiant->prenom = $request->prenom;
        $etudiant->nom = $request->nom;
        $etudiant->email = $request->email;
        $etudiant->telephone = $request->telephone;
        $etudiant->photoprofil = $request->photo;
        $etudiant->classes_id = $request->classe_id;
        $etudiant->save();
        return redirect()->route('root')->with('etudiantcreate', 'Etudiant créer avec success');
    }

    public function etudiantdestroy($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete($id);
        return redirect()->route('root')->with('etudiantdelete', 'Etudiant supprimer avec success');
    }




}
