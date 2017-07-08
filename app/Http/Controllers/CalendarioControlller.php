<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Model Anime
use App\Models\Site\Anime;

class CalendarioControlller extends Controller
{
    public function index()
    {
      $segunda = Anime::Where('epnovo', 'Segunda')->orderBy('id', 'DESC')->get();
      $terca = Anime::Where('epnovo', 'terça')->orderBy('id', 'DESC')->get();
      $quarta = Anime::Where('epnovo', 'quarta')->orderBy('id', 'DESC')->get();
      $quinta = Anime::Where('epnovo', 'quinta')->orderBy('id', 'DESC')->get();
      $sexta = Anime::Where('epnovo', 'sexta')->orderBy('id', 'DESC')->get();
      $sabado = Anime::Where('epnovo', 'sábado')->orderBy('id', 'DESC')->get();
      $domingo = Anime::Where('epnovo', 'domingo')->orderBy('id', 'DESC')->get();
      $titlepg = 'Calendário';
      $title = 'Anitoon - Calendário de lançamentos de animes';
      return view('site.calendario', 
      compact('segunda', 'terca', 'quarta', 'quinta', 'sexta', 'sabado', 'domingo'
      , 'titlepg', 'titlee'));
    }
}
