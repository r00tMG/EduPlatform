<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscrireFormRequest;
use App\Http\Requests\SearchFormRequest;
use App\Mail\CoursInscriptionMail;
use App\Models\Cours;
use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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

    public function inscrire(InscrireFormRequest $request,$id)
    {
        $cour = Cours::find($id);
        $data = $request->validated();

        Inscription::create([
            'user' => $data['user'],
            'firstname'=> $data['firstname'],
            'lastname'=> $data['email'],
            'email'=> $data['email'],
            'phone'=> $data['phone'],
            'message'=> $data['describ'],
            'libelle'=> $cour['libelle'],
            'describ'=> $cour['describ']
        ]);

        return back()->with('success', 'Merci d\'avoir inscrite à cette cours');

    }

    public function mescours()
    {
        $cours = DB::table('inscriptions')->where('user',Auth::user()->email)->get();
        //dd($cours[0]->libelle);
        return view('etudiant.cours.mescours',[
            'cours' => $cours
        ]);
    }
}
