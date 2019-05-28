<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Modeles\MangaDAO;

class MangaController extends Controller
{
    //
    public function getLesMangas(){
        $mangaDAO = new MangaDAO();
        $lesMangas = $mangaDAO->getLesMangas();
        return view('listeMangas',compact('lesMangas'));
    }




}
