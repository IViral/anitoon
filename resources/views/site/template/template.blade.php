<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title or 'Home'}}</title>

    <link href="{{url('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="centro">

        <header style="width:100%;">
            <nav class="menu-rp navbar navbar-inverse navbar-toggleable-md navbar-light bg-faded" style="background: #484976">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">Anitoon</a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('lista-de-animes')}}">Lista de Animes <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('calendario')}}">Calendário <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('contato')}}">Contato <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="{{url('buscar')}}" method="_POST">
                        <input class="form-control mr-sm-2" type="text" placeholder="" name="nome" style="background: #3e3c65;color: #fff;">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="cursor: pointer;">Buscar</button>
                    </form>
                </div>
            </nav>
            <div class="banner-top centralizar">
                <img src="{{url('')}}/img/Banner 728x90.png" class="img-banner" alt="">
            </div>
        </header>
        
           <div class="conteudo col-sm-12 col-md-12 ">
        <div class="postagem col-md-8 pull-left zera-margin">
            <div class="barra-postagem"><i class="fa fa-chevron-right"></i>
                <p>{{$titlepg or 'Lançamentos'}}</p>
            </div>
            
        @yield('skinpg')
        
        @yield('skin')

            <div class="campo-paginacao" style="clear:both">
                @yield('pagination')
            </div>
        </div>
        
        
   <div class="widget col-md-4 pull-right zera-margin">
   <!-- <div class="widget col-md-12 pull-right zera-margin">
        <div class="barra-postagem"><i class="fa fa-sign-in"></i>
            <p>Login</p>
        </div>
        <form autocomplete="off" action=" ">
            <input class="input-login" type="text" placeholder="Usuário">
            <input class="input-login" type="password" placeholder="Senha">
            
            <button type="button" class="bt-cad" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-user-plus"></i>Cadastrar-se</button>


            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cadastrar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control input-cad" placeholder="Login" class="recipient-name">
                                    <input type="text" class="form-control input-cad" placeholder="Usuário" id="recipient-name">
                                    <input type="password" class="form-control input-cad" placeholder="Senha" id="recipient-name">
                                    <input type="password" class="form-control input-cad" placeholder="Insira sua senha novamente" id="recipient-name">
                                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0 input-cad" id="inlineFormCustomSelect">
                                        <option selected>Sexo</option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Feminino</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <button class="bt-login" type="button">Logar</button>
        </form>
    </div> -->
@yield('widget')
</div> 
    </div>
    <footer>
        <p>Copyright © Anitoon 2016 - 2017 - <a href="#">Termos de Uso do Site</a> - <a href="#">DMCA</a></p>
    </footer>

        <script src="{{url('js/jquery.min.js')}}"></script>
        <script src="{{url('js/bootstrap.min.js')}}"></script>