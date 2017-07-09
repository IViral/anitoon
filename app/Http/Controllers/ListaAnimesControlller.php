<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Model Anime
use App\Models\Site\Anime;
use App\Models\Site\Widget;


class ListaAnimesControlller extends Controller
{
    public function index()
    {
      $anime = Anime::orderBy('name', 'ASC')->paginate(25);
      $sem = 'Não existe animes que iniciam com essa letra disponível';
      $title = 'Anitoon - Lista de Animes, Filmes e OVAs';
      $titlepg = 'Lista de Animes';
      $widget = Widget::orderBy('id', 'DESC')->get();
      if(count($anime))
       return view('site.lista', compact('anime', 'title', 'titlepg', 'widget'));
      else
        return view('site.lista', compact('anime', 'title', 'sem', 'titlepg', 'widget'));
    }
    public function letra($letra)
    {
      $buscar = $letra.'%';
      $anime = Anime::where('name', 'LIKE', $buscar)->orderBy('name', 'ASC')->paginate(25);
      $sem = 'Não existe animes que iniciam com essa letra disponível';
      $title = 'Anitoon - Lista de Animes, Filmes e OVAs';
      $titlepg = 'Lista de Animes';
      $widget = Widget::orderBy('id', 'DESC')->get();
      if(count($anime))
       return view('site.lista', compact('anime', 'title', 'titlepg', 'widget'));
      else
        return view('site.lista', compact('anime', 'title','sem', 'titlepg', 'widget'));;
    }
      public function especial()
    {
      $anime = Anime::where('name', 'RLIKE', '^[1-9-$-.-#-/-ē]')->orderBy('name', 'ASC')->paginate(25);
      $sem = 'Não existe animes que iniciam com essa letra disponível';
      $title = 'Anitoon - Lista de Animes, Filmes e OVAs';
      $titlepg = 'Lista de Animes';
      $widget = Widget::orderBy('id', 'DESC')->get();
      if(count($anime))
       return view('site.lista', compact('anime', 'title', 'titlepg', 'widget'));
      else
        return view('site.lista', compact('anime', 'title','sem', 'titlepg', 'widget'));;
    }
}
