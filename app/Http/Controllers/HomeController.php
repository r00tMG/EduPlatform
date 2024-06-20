<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscrireFormRequest;
use App\Http\Requests\SearchFormRequest;
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

    public function index(SearchFormRequest $request)
    {
        $query = Cours::query();
        #$cours = Cours::orderBy('created_at','DESC')->paginate(6);
        if ($request->has('libelle'))
        {
            $query = $query->where('libelle', 'like', "%{$request->input('libelle')}%");
        }
        return view('etudiant.cours.index',[
            'cours' => $query->orderBy('created_at','DESC')->paginate(4),
           'input' => $request->validated()
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
