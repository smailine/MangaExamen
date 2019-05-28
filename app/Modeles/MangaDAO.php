<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;

use App\Metier\Manga;

use DB;

class MangaDAO extends DAO
{
    //
    public function getLesMangas(){
        $lesMangas = DB::table('manga')->get();
        $lesMangasTab = array();
        foreach ($lesMangas as $leManga){
            $idManga = $leManga->id_manga;
            $lesMangasTab[$idManga] = $this->creerObjetMetier($leManga);
        }
        return $lesMangasTab;
    }

    protected function creerObjetMetier(\stdClass $unManga){
        $manga = new Manga();
        $manga ->setIdManga($unManga->id_manga);
        $manga ->setPrix($unManga->prix);
        $manga ->setTitre($unManga->titre);
        $manga ->setGenre($unManga->genre);

        return $manga;
    }

}
