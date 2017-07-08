<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site\Episodio;
use App\Models\Site\Widget;

class HomeControlller extends Controller
{
   public function index()
   {
     $episodios = Episodio::where('home', 1)->orderBy('id', 'DESC')->paginate(12);
     $widget = Widget::orderBy('id', 'DESC')->get();
     return view('site.home', compact('episodios', 'widget'));
   }
  
  public function error404()
  {
    return view('error404');
  }
}
