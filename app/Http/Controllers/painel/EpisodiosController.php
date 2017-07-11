<?php

namespace App\Http\Controllers\painel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Site\Anime;
use App\Models\Site\Episodio;
use App\Http\Requests\EpisodioFormRequest;

class EpisodiosController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nome = $request->input('nome');
        $buscar = '%'.$nome.'%';
        $episodio = Episodio::Where('name', 'LIKE', $buscar)->orderBy('name', 'ESC')->paginate(25);
        $sem = 'Episódio não achado';
        if(count($episodio))
            return view('auth.episodios', compact('episodio'));
        else
            return view('auth.episodios', compact('episodio', 'sem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        $anime = Anime::where('name', $request->input('name'))->get()->first();
        $episodio = Episodio::where('name', $request->input('name'))->get();
        if($anime)
            $episodio = Episodio::insert($data);
        else
            return redirect()->route('episodios.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
