@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Episódios</div>

                <div class="panel-body">
   <form>
  <div class="form-group">
    <label for="exampleInputtext">Nome do Anime</label>
    <input type="text" class="form-control" placeholder="Exemplo: Boku no Hero">
  </div>
  <div class="form-group">
    <label for="exampleInputtext">Episódio</label>
    <input type="text" class="form-control" placeholder="Exemplo: 05">
  </div>
  <div class="form-group">
    <label for="exampleInputtext">Episódio na Home</label>
    <input type="text" class="form-control" placeholder="Exemplo: 0 para não e 1 para sim">
  </div>
    <div class="form-group">
    <label for="exampleInputtext">Video</label>
    <textarea  placeholder="Exemplo: video.mp4" class="form-control"></textarea>
    </div>
  <div class="form-group">
    <label for="exampleInputFile">Imagem</label>
    <input type="file" id="exampleInputFile">
  </div>
  <button type="submit" class="btn btn-default">Salvar</button>
</form>
   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
