<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Model Anime
use App\Models\Site\Anime;


class ListaAnimesControlller extends Controller
{
    public function index()
    {
      $anime = Anime::orderBy('name', 'ASC')->paginate(25);
      $sem = 'Não existe animes que iniciam com essa letra disponível';
      $title = 'Anitoon - Lista de Animes, Filmes e OVAs';
      $titlepg = 'Lista de Animes';
      if(count($anime))
       return view('site.lista', compact('anime', 'title', 'titlepg'));
      else
        return view('site.lista', compact('anime', 'title', 'sem', 'titlepg'));
    }
    public function letra($letra)
    {
      $buscar = $letra.'%';
      $anime = Anime::where('name', 'LIKE', $buscar)->orderBy('name', 'ASC')->paginate(25);
      $sem = 'Não existe animes que iniciam com essa letra disponível';
      $title = 'Anitoon - Lista de Animes, Filmes e OVAs';
      $titlepg = 'Lista de Animes';
      if(count($anime))
       return view('site.lista', compact('anime', 'title', 'titlepg'));
      else
        return view('site.lista', compact('anime', 'title','sem', 'titlepg'));;
    }
      public function especial()
    {
      $anime = Anime::where('name', 'RLIKE', '^[1-9-$-.-#-/-ē]')->orderBy('name', 'ASC')->paginate(25);
      $sem = 'Não existe animes que iniciam com essa letra disponível';
      $title = 'Anitoon - Lista de Animes, Filmes e OVAs';
      $titlepg = 'Lista de Animes';
      if(count($anime))
       return view('site.lista', compact('anime', 'title', 'titlepg'));
      else
        return view('site.lista', compact('anime', 'title','sem', 'titlepg'));;
    }
}
