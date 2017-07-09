<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Model Episodio
use App\Models\Site\Episodio;
//Model Anime
use App\Models\Site\Anime;
use App\Models\Site\Widget;

class PaginaControlller extends Controller
{ 
    public function index($nome = null)
    {
      //Trocar - por espaço do nome
      $name = str_replace('-', ' ', $nome);
      //Conexao com banco de dados de episodios
      $episodio = Episodio::where('name', $name)->orderBy('ep', 'ASC')->paginate(12);
      //Conexao com o banco de dados de animes
      $anime = Anime::where('name', $name)->get()->first();
      $widget = Widget::orderBy('id', 'DESC')->get();
      //Verificar se existe anime no banco de dados
      if($anime)
        //Se existir passa titulo da barra
        $titlepg = "{$anime->name}";
      //Verificar se existe anime no banco de dados
      if($anime)
        //Se existir passa titulo da pagina
         $title = "{$anime->name} - Lista de Episódios";
      //Verificar se existe anime no banco de dados
      if($anime)
        //Se existir carrega a pagina
       return view('site.pagina', compact('anime', 'episodio','verificar', 'title', 'titlepg', 'nome', 
       'widget'));
      else
        //Se nao manda para pagina 404
        return view('error404');
    }
}































/*
   private $episodios;
   private $animes;
    public function __construct(episodio $episodio, anime $anime)
    {
       $this->episodio = $episodio;
       $this->anime = $anime;
    }
  
    public function index($nome)
    {
      $name = str_replace('-', ' ', $nome);
      $episodios = $this->episodio->orderBy('id', 'DESC')->where('name', 'boku no hero')->paginate(12);
      $animes = $this->anime->where('name', 'boku');
      return view('site.pagina', compact('episodios', 'animes', 'name', 'title'));
    }*/