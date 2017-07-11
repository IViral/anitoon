@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Episódios</div>

                <div class="panel-body">
                    <a href='{{url('painel/episodios/create')}}'>
                        <button type="button" class="btn btn-primary bt-cadastrar">Cadastrar</button>
                    </a>
                    <a href='{{url('painel/episodios')}}'>
                        <button type="button" class="btn btn-primary bt-cadastrar">Voltar</button>
                    </a>
                    <form class="navbar-form navbar-right" style="top:-7px;position:relative;">
        <div class="form-group" action="" method="post">
          <input type="text" class="form-control" name="nome" placeholder="Buscar Episódio">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
                    <table class="table table-striped" style="margin-top:10px;">
                        <tr>
                            <th>Nome</th>
                            <th>Ep</th>
                            <th width="100px;">Açoes</th>
                        </tr>
                        @forelse($episodio as $episodios)
                        <tr>
                            <td>{{$episodios->name}}</td>
                            <td>{{$episodios->ep}}</td>
                        <td>
                            <a href="{{url('painel/episodios')}}/{{$episodios->id}}/edit" 
                            class="edit actions">
                            <i class="fa fa-pencil" style="background: #21aa9a;color: #fff;padding: 8px;
                            border-radius: 2px;"></i></a>
                            <a href="http://localhost/site/public/produto/48" class="delete actions">
                            <i class="fa fa-trash" style="background: #fa4248;color: #fff;padding: 8px;
                            border-radius: 2px;"></i></a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td>Episódio não Encontrado!!!</td>
                            <td>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
