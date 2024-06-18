<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscrireFormRequest;
use App\Models\Cours;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function accueil()
    {
        $cours = Cours::orderBy('created_at','DESC')->limit(3)->get();
        return view('etudiant.cours.accueil',[
            'cours' => $cours
        ]);
    }

    public function index()
    {
        $cours = Cours::orderBy('created_at','DESC')->paginate(6);
        return view('etudiant.cours.index',[
           'cours' => $cours
        ]);
    }

    public function show(Cours $cour)
    {
        return view('etudiant.cours.show',[
            'cour' => $cour
        ]);

    }

    public function inscrire(InscrireFormRequest $request,Cours $cour)
    {

    }
}
