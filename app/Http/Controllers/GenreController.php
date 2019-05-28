<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InsertionConfRequest;
class GenreController extends Controller
{

    public function ajoutGenre(){
        return view('formAjoutGenre');
    }

    public function postAjoutGenre(InsertionConfRequest $request){
        $monManga = new Manga();
        $monManga->setLibelleGenre($request->input('intituleConf'));

        return view('insertionOK');
    }
}
