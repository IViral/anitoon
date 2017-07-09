@extends('site.template.template')

@section('skin')

<div class="embed-responsive embed-responsive-16by9" style="margin-top:5px;">
  <video id="my-video" class="video-js embed-responsive-item" controls preload="auto"
  poster="{{url('img')}}/{{$episodio->imagem}}" data-setup="{}">
    <source src="{{$episodio->video}}" type='video/mp4'>
    <source src="{{$episodio->video}}" type='video/webm'>
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video>
</div>
  <a href="{{url('contato')}}" style="text-decoration:none;color:#484976;"> <div class="afk" 
  style="text-align:center;">
  <i class="fa fa-warning" style="font-size: 17pt;
  margin-top: 10px;"></i> Reporta Problema no video</div></a>


@endsection