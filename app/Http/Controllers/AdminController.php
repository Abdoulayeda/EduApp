<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Universite;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    // Les fonctions pour ajouter, moditer et supprimer une université
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
       $request->validate([
           'libelle'=>'required|unique:universites',
            'description'=>'min:10'
        ]);
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
        $request->validate([
            'description'=>'min:10'
        ]);
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

 // Les fonctions pour ajouter, moditer et supprimer une classe

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
        return redirect()->route('classeliste', [$classe->universite])->with('storeclasse', 'La classe a été créer avec success');

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
        return redirect()->route('classeliste', [$classe->universite])->with('updateclasse', 'La classe a été modifié avec success');
    }

    public function classedestroy($id)
    {
        $classe = Classe::find($id);
        $classe->delete($id);
       return redirect()->route('classeliste', [$classe->universite])->with('deleteclasse','La classe a été supprimer avec success');

    }


/*
 *Les fonctions pour ajouter, moditer et supprimer  un etudiant
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
            'email'=>'required|email|unique:etudiants',
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
        return redirect()->route('listeetudiant', [$etudiant->classe])->with('storeetudiant', 'Etudiant créer avec succès');
    }


    public function etudiantedit($id)
    {
        $etudiant = Etudiant::find($id);
        return view('etudiant.edit')->with(compact('etudiant'));
    }

    public function etudiantupdate(Request $request, $id)
    {
        $request->validate([
            'email'=>'required|email',
            'telephone'=>'required',
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
        return redirect()->route('listeetudiant', [$etudiant->classe])->with('updateetudiant', 'Etudiant modifier avec succès');

    }

    public function etudiantdestroy($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete($id);
        return redirect()->route('listeetudiant', [$etudiant->classe])->with('deleteetudiant', 'Etudiant supprimer avec succès');

    }




}
