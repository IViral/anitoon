@extends('site.template.template')

@section('skinpg')

<div class="fundo-pagina-anime">
    <img src="{{url('')}}/img/{{$anime->imagem}}" alt="" style="width:155px;float:left;">
    <div class="campo-inf">
        <div class="junta-pagina-ep">
           <div class='pagina-ep'><span>Episódios:</span> {{$anime->eps}}</div>
        </div>
        <br>
        <div class="junta-pagina-ep">
            <div class="pagina-ep"><span>Gêneros:</span> {{$anime->generos}}</div>
        </div>
        <br>
        <div class="junta-pagina-ep">
            <div class="pagina-ep"><span>Estúdio:</span> {{$anime->estudio}}</div>
        </div>
        <br>
        <div class="junta-pagina-ep">
            <div class="pagina-ep"><span>Status:</span> {{$anime->status}}</div>
        </div>
        <br>
            <div class="pagina-sip"><span>Sinopse:</span> {{$anime->sinopse}}</div>
    </div>
</div>
@endsection

@section('skin')

@forelse($episodio as $episodios)
@php
    $ur = str_replace(' ', '-', $episodios->name);
@endphp
 <div class='skin-fundo'>
     <img class='img-skin' src='{{url('img')}}/{{$episodios->imagem}}' alt=''>
     <div class='titulo-skin'><a href='{{url('')}}/anime/{{$nome}}'>{{$episodios->name}}</a></div>
     <div class='ep-skin'>Episódio {{$episodios->ep}}</div>
     <div class='campo-downloads-skin'>  
         <a href="{{url('anime')}}/{{$ur}}/{{$episodios->ep}}" class='btn btn-primaryy' 
         style="color:#fff;">Assistir</a>
     </div>
</div>
@empty
   
    <p>Sem Episódios</p>

@endforelse

@section('pagination')

{{ $episodio->links() }}

@endsection

@endsection