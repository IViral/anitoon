<?php
//Home
Route::get('/', 'HomeControlller@index');
//Error 404
Route::get('/error404', 'HomeControlller@error404');
//Pagina do Anime
Route::get('/anime/{nome?}', 'PaginaControlller@index');
//Lista de Episodios
Route::get('/lista-de-animes', 'ListaAnimesControlller@index');
Route::get('/lista-de-animes/{letra}', 'ListaAnimesControlller@letra');
Route::get('/lista-de-animes-especial', 'ListaAnimesControlller@especial');
//Assistir Anime
Route::get('/anime/{anime}/{ep}', 'AssistirControlller@index');
//Calendario
Route::get('/calendario', 'CalendarioControlller@index');
//Busca
Route::get('/buscar', 'BuscaControlller@index');
//Contato
Route::resource('/contato', 'MailController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
