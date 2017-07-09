@extends('site.template.template')

@section('skin')

@forelse($episodios as $episodio)

@php
    $ur = str_replace(' ', '-', $episodio->name);
@endphp

    <div class='skin-fundo'>
        <img class='img-skin' src='{{url('img')}}/{{$episodio->imagem}}' alt=''>
        <div class='titulo-skin'><a href='{{url('')}}/anime/{{$ur}}'>{{$episodio->name}}</a></div>
        <div class='ep-skin'>Episódio {{$episodio->ep}}</div>
        <div class='campo-downloads-skin'>  
            <a href="" class='btn btn-primaryy' style="color:#fff;">Assistir</a>
        </div>
    </div>

@empty
   
    <p>Sem Episódios</p>
    
@endforelse

@section('pagination')

    {{ $episodios->links() }}

@endsection

@endsection