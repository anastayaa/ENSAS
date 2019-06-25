<?php

namespace App\Http\Controllers;

use App\Actualite;
use App\Slide;
use App\Document;
use App\Departement;
use App\Filiere;
use Illuminate\Http\Request;
use App\Http\Requests\DepartementRequest;
use App\Http\Requests\FiliereRequest;

class SiteController extends Controller
{
    public function index(){
        $sliders=Slide::all();
        $actualites=Actualite::paginate(6);
        return view("site.index", compact(
            ['sliders', $sliders],
            ['actualites', $actualites]));
    }

    public function departs(){

        $departements=Departement::all();
        return view('site.departs', compact('departements'));
    }

    public function filieres(){//$str){

        $filieres=Filiere::all();
        //$filieres=Filiere::all()->where('titre', $str);
        //$filiere=Filiere::pluck('titre', $str);;
        $filieres=Filiere::all();
        return view('site.filieres', compact('filieres'));
    }
    
    public function cycleprepa(){

        return view("site.cycleprepa");
    }

    public function formations(){

        return view("site.formations");
    }

    public function ginfo(){

        return view("site.ginfo");
    }
    public function gindus(){

        return view("site.gindus");
    }
    public function gtr(){

        return view("site.gtr");
    }
    public function gpmc(){

        return view("site.gpmc");
    }


    public function bde(){

        return view("site.bde");
    }
    public function clubs(){

        return view("site.clubs");
    }
    public function reglement(){

        return view("site.reglement");
    }

    public function gallery(){

        return view("site.gallery");
    }

    public function offre(){

        $offres=Document::where('titre', 'like', "Offre%")->orderBy('created_at', 'DESC')->get();
        return view("site.offre", compact('offres'));
    }

    public function news(){

        $actualites=Actualite::all();
        return view("site.news", compact('actualites', $actualites));
    }

    public function emploi(){

        return view('site.emploi');
    }
}
