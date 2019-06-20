<?php

namespace App\Http\Controllers;

use App\Departement;
use Illuminate\Http\Request;
use App\Http\Requests\DepartementRequest;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departements=Departement::paginate(2);
        //return view('departements.index', compact('departements'));
        return response()->json(Departement::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$image = $request->get('titre').''.time().'.'.request()->image->getClientOriginalExtension();
        //request()->image->move(public_path('departements/images'), $image);
        /*$departement=new Departement(
            [
                'titre'=>$request->get('titre'),
                'image'=>$request->get('image')
            ]
        );
        $departement->save();*/
        //return redirect('/departement')->with('success', 'Departement has been added');
        $departement=Departement::create($request->all());
        return $departement;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function show(Departement $departement)
    {
        //return view('departements.show', compact('departement'));
        return $departement;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function edit(Departement $departement)
    {
        return view('departements.edit', compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departement $departement)
    {
        
        /*$image = $request->get('titre').''.time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('departements/images'), $image);  
        $departement->titre=$request->get('titre');  
        $departement->image=$image; 
        $departement->save();
        return redirect('/departement')->with('success', 'Departement has been updated');*/
        $departement->update($request->all());
        return $departement;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departement $departement)
    {
        $departement->delete();
        //return redirect('/departement')->with('success', 'Departement has been removed');
        return response()->json('Successfully Deleted');
    }
}
