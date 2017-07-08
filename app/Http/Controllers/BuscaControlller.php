<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Model Anime
use App\Models\Site\Anime;


class BuscaControlller extends Controller
{
    public function index(Request $request)
    {
      $nome = $request->input('nome');
      $buscar = '%'.$nome.'%';
      $anime = Anime::Where('name', 'LIKE', $buscar)->orderBy('name', 'ESC')->paginate(25);
      $sem = 'Anime não encontrado';
      $title = 'Anitoon - Buscando '.$nome;
      $titlepg = 'Buscando '.$nome;
      if(count($anime))
        return view('site.busca', compact('title', 'titlepg', 'anime'));
      else
        return view('site.busca', compact('title', 'titlepg', 'anime', 'sem'));
    }
}
