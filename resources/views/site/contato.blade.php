@extends('site.template.template')


@section('skin')
@if(Session::has('message'))
<p class="bg-success" style="margin-top: 15px;height: 50px;background: #dff0d8;padding: 12px;">{{ Session::get('message') }}</p>
@endif

            <div class="sep-form">
                <form action="{{url('contato')}}" method="POST">
                    <div class="form-group">
                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="email" class="form-control sep-form" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                        <input type="text" class="form-control sep-form" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control sep-form" id="exampleTextarea" name="mensagem"rows="5" placeholder="Escreva sua mensagem..." style="min-height:100px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Enviar</button>
                </form>
            </div>
            
@endsection