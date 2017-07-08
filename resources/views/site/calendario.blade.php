@extends('site.template.template')


@section('skin')

            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header barra-dw-skin" role="tab" id="headingOne">
                        <h5 class="mb-0">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
          Segunda-Feira
        </a>
      </h5>
                    </div>

                    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-block zera-margin">
                           
                            @forelse($segunda as $segundas)
                            @php
                            $ur = str_replace(' ', '-', $segundas->name);
                            @endphp
                            <div class="download-skin-campo"><a href="{{url('anime')}}/{{$ur}}" rel="nofollow">{{$segundas->name}} </a></div>
                            @empty
                            <div class="download-skin-campo"><a href="#" rel="nofollow">Sem animes em lançamento na Segunda</a></div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header barra-dw-skin" role="tab" id="headingTwo">
                        <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
          Terça-Feira
        </a>
      </h5>
                    </div>
                    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-block zera-margin">
                            @forelse($terca as $tercas)
                            @php
                            $ur = str_replace(' ', '-', $tercas->name);
                            @endphp
                            <div class="download-skin-campo"><a href="{{url('anime')}}/{{$ur}}" rel="nofollow">{{$tercas->name}} </a></div>
                            @empty
                            <div class="download-skin-campo"><a href="#" rel="nofollow">Sem animes em lançamento na Terça</a></div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header barra-dw-skin" role="tab" id="headingThree">
                        <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree">
          Quarta-Feira
        </a>
      </h5>
                    </div>
                    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="card-block zera-margin">
                            @forelse($quarta as $quartas)
                            @php
                            $ur = str_replace(' ', '-', $quartas->name);
                            @endphp
                            <div class="download-skin-campo"><a href="{{url('anime')}}/{{$ur}}" rel="nofollow">{{$quartas->name}} </a></div>
                            @empty
                            <div class="download-skin-campo"><a href="#" rel="nofollow">Sem animes em lançamento na Quarta</a></div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header barra-dw-skin" role="tab" id="headingThree">
                        <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree4" aria-expanded="false" aria-controls="collapseThree">
          Quinta-Feira
        </a>
      </h5>
                    </div>
                    <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="card-block zera-margin">
                            @forelse($quinta as $quintas)
                            @php
                            $ur = str_replace(' ', '-', $quintas->name);
                            @endphp
                            <div class="download-skin-campo"><a href="{{url('anime')}}/{{$ur}}" rel="nofollow">{{$quintas->name}} </a></div>
                            @empty
                            <div class="download-skin-campo"><a href="#" rel="nofollow">Sem animes em lançamento na Quinta</a></div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header barra-dw-skin" role="tab" id="headingThree">
                        <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree5" aria-expanded="false" aria-controls="collapseThree">
          Sexta-Feira
        </a>
      </h5>
                    </div>
                    <div id="collapseThree5" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="card-block zera-margin">
                            @forelse($sexta as $sextas)
                            @php
                            $ur = str_replace(' ', '-', $sextas->name);
                            @endphp
                            <div class="download-skin-campo"><a href="{{url('anime')}}/{{$ur}}" rel="nofollow">{{$sextas->name}} </a></div>
                            @empty
                            <div class="download-skin-campo"><a href="#" rel="nofollow">Sem animes em lançamento na Sexta</a></div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header barra-dw-skin" role="tab" id="headingThree">
                        <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree6" aria-expanded="false" aria-controls="collapseThree">
          Sábado
        </a>
      </h5>
                    </div>
                    <div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="card-block zera-margin">
                            @forelse($sabado as $sabados)
                            @php
                            $ur = str_replace(' ', '-', $sabados->name);
                            @endphp
                            <div class="download-skin-campo"><a href="{{url('anime')}}/{{$ur}}" rel="nofollow">{{$sabados->name}} </a></div>
                            @empty
                            <div class="download-skin-campo"><a href="#" rel="nofollow">Sem animes em lançamento no Sábado</a></div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header barra-dw-skin" role="tab" id="headingThree">
                        <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree7" aria-expanded="false" aria-controls="collapseThree">
          Domingo
        </a>
      </h5>
                    </div>
                    <div id="collapseThree7" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="card-block zera-margin">
                            @forelse($domingo as $domingos)
                            @php
                            $ur = str_replace(' ', '-', $domingos->name);
                            @endphp
                            <div class="download-skin-campo"><a href="{{url('anime')}}/{{$ur}}" rel="nofollow">{{$domingos->name}} </a></div>
                            @empty
                            <div class="download-skin-campo"><a href="#" rel="nofollow">Sem animes em lançamento no Domingo</a></div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>


@endsection