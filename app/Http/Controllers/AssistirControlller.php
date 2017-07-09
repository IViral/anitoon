<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site\Episodio;
use App\Models\Site\Widget;

class AssistirControlller extends Controller
{
    public function index($anime, $ep)
    {
        $name = str_replace('-', ' ', $anime);
        $episodio = Episodio::where('name', $name)->where('ep', $ep)->first();
        $widget = Widget::orderBy('id', 'DESC')->get();
        if($episodio)
            $title = "{$episodio->name} - Episódio {$episodio->ep}";
        if($episodio)
            $titlepg = "{$episodio->name} - Episódio {$episodio->ep}";
        if($episodio)
            return view('site.assistir', compact('widget', 'episodio', 'title', 'titlepg'));
        else
            return view('error404');
    }
}
