@extends('site.template.template')


@section('skin')


            <div class="campo-paginacao-lista">
               <a class="paginacao" href="{{url('lista-de-animes-especial')}}">#</a>
               @foreach(range('a', 'z') as $letras)
               <a class="paginacao" href="{{url('lista-de-animes')}}/{{$letras}}">{{strtoupper($letras)}}</a>
               @endforeach
            </div>

            <div class="campo-lista-skins">
            {{$sem or ''}}

               @foreach($anime as $animes)
               
                <div class="fundo-lista-skin">
                    <div class="fundo-pagina-anime">
                       @php
                       $ur = str_replace(' ', '-', $animes->name);
                       @endphp
                        <div class="barra-postagem-pagina"><a href="{{url('anime')}}/{{$ur}}"><i class="fa fa-folder-open"></i>
                            <p>{{$animes->name}}</a></p>
                        </div>

                        <img src="{{url('img')}}/{{$animes->imagem}}" alt="" style="width:100px;float:left;">
                        <div class="aj-lista-skin">

                            <div class="junta-pagina-ep">
                                <div class="pagina-ep"><span>Episódios:</span> {{$animes->eps}}</div>
                            </div>
                            <br>
                            <div class="junta-pagina-ep">
                                <div class="pagina-ep"><span>Gêneros:</span> {{$animes->generos}}</div>
                            </div>
                            <br>
                            <div class="junta-pagina-ep">
                                <div class="pagina-ep"><span>Estúdio:</span> {{$animes->estudio}}</div>
                            </div>
                            <br>
                            <div class="junta-pagina-ep">
                                <div class="pagina-ep"><span>Status:</span> {{$animes->status}}</div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                
              @endforeach
                
            </div>
@section('pagination')

{{$anime->links()}}

@endsection
            
@endsection