<?php

namespace App\Http\Controllers\Enseignant;

use App\Http\Controllers\Controller;
use App\Http\Requests\CoursFormRequest;
use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cours = Cours::orderBy('created_at','DESC')->paginate(5);
        //dd($cours);
        return view('enseignant.cours.index',compact('cours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cour = new Cours();
        $cour->fill([
            'libelle' => 'PHP'
        ]);
        return view('enseignant.cours.form',[
            'cour' => $cour
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoursFormRequest $request)
    {
        $cours = Cours::create($request->validated());
        //dd($cours);
        return redirect()->route('enseignant.cours.index',[
            'cours' => $cours
        ])->with('success', 'Le cours a été bien créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Cours $cours
     * @return \Illuminate\Http\Response
     */
    public function edit(Cours $cour)
    {
        //dd($cour);
        return view('enseignant.cours.form',[
            'cour' => $cour
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Cours $cour
     * @return \Illuminate\Http\Response
     */
    public function update(CoursFormRequest $request, Cours $cour)
    {
        //dd($cour);
        $cour->update($request->validated());
        return redirect()->route('enseignant.cours.index')->with('success', 'Le cours a été bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Cours $cour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cours $cour)
    {
        $cour->delete();
        return redirect()->route('enseignant.cours.index')->with('success', 'Le cours a été bien supprimé');
    }
}
