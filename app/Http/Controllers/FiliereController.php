<?php

namespace App\Http\Controllers;

use App\Filiere;
use App\Departement;
use App\Responsable;
use App\Coordinateur;
use Illuminate\Http\Request;
use App\Http\Requests\FiliereRequest;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres=Filiere::paginate(2);
        return view('filieres.index', compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departements=Departement::all();
        $responsables=Responsable::all();
        $coordinateurs=Coordinateur::all();
        return view('filieres.create', compact(['departements', 'responsables', 'coordinateurs']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FiliereRequest $request)
    {
        $image = $request->get('titre').''.time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('filieres/images'), $image);
        $departement=Departement::find($request->get('departement_id'));
        $responsable=Responsable::find($request->get('responsable_id'));
        $coordinateur=Coordinateur::find($request->get('coordinateur_id'));
        $filiere=new Filiere(
            [
                'titre'=>$request->get('titre'),
                'image'=>$image
            ]
        );
        $filiere->departement()->associate($departement);
        $responsable->filiere()->save($filiere);
        $coordinateur->filiere()->save($filiere);
        return redirect('/filiere')->with('success', 'Filiere has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function show(Filiere $filiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Filiere $filiere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filiere $filiere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filiere $filiere)
    {
        //
    }
}
