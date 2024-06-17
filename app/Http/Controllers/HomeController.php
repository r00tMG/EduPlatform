<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        # $cours = Cours::orderBy('created_at','DESC')->limit(3)->get()
        $cours = Cours::orderBy('created_at','DESC')->limit(2)->paginate(16);
        return view('etudiant.cours.index',[
            'cours' => $cours
        ]);
    }
}
