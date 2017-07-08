<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class MailController extends Controller
{
    public function index()
    {
      $title = 'Anitoon - Contato';
      $titlepg = 'Contato';
      return view('site.contato', compact('title','titlepg'));
    }

    public function store(Request $request)
    {
      $dataForm = $request->except(['_token']);
        Mail::send('site.contat',$request->all(), function($msg){
          $msg->subject('Correio de Contato');
          $msg->to('luucasroberto250@gmail.com');
        });
      Session::flash('message','Email enviado com sucesso');
      return Redirect::to('/contato');
    }
}
