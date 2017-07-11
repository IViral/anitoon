@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Episódios</div>

                <div class="panel-body">
   <form method="post" class="form" action="{{route('episodios.store')}}">
   <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
    <label for="exampleInputtext">Nome do Anime</label>
    <input type="text" class="form-control" name="name" placeholder="Exemplo: Boku no Hero" 
    value="{{old('name')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputtext">Episódio</label>
    <input type="text" class="form-control" name="ep" placeholder="Exemplo: 05" 
    value="{{old('ep')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputtext">Episódio na Home</label>
    <input type="text" class="form-control" name="home" placeholder="Exemplo: 0 para não e 1 para sim" 
    value="{{old('home')}}">
  </div>
    <div class="form-group">
    <label for="exampleInputtext">Video</label>
    <textarea  placeholder="Exemplo: video.mp4" name="video" class="form-control">
    {{old('video')}}</textarea>
    </div>
  <!-- <div class="form-group">
    <label for="exampleInputFile">Imagem Jpg ou Png</label>
    <input type="file" id="exampleInputFile">
  </div> -->
  <button class="btn btn-default">Salvar</button>
</form>
   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
