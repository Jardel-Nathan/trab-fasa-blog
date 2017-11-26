@extends('blog.template')

@section('content')
<div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container valign">
            <br><br>
            <h1 class="header center grey-text text-darken-3">Criar Post</h1>
            <div class="row center">
                <h5 class="header col s12 light grey-text text-darken-3">Blog Web Fasa</h5>
            </div>
            <div class="row center">
                <a href="#startPosts" class="btn-floating btn-large waves-effect waves-light grey darken-3 head-link"><i class="fa fa-angle-double-down"></i></a>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="{{asset('blog/images/contact1.jpg')}}" alt="Unsplashed background img 2"></div>
</div>

<div class="container" id="startPosts">
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col s12 m10 offset-m1 l9 offset-l1">

            <form class="col s12" action="/post/create" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row">
                    <div class="input-field col s12">
                        <input name="titulo" id="message-sub" type="text" class="validate">
                        <label for="message-sub">Título</label>
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s6">
                        <input name="autor"  type="text" class="validate">
                        <label for="message-sub">Autor</label>
                    </div>

                    <div class="input-field col s6">
                      <span  id="fileselector">
                            <label style="color: #ffffff !important;" class="btn btn-default" for="upload-file-selector">
                                <input id="upload-file-selector" type="file" name="imagem" style="display:none" >

                                Selecionar Imagem
                            </label>
                        </span>


                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="conteudo" id="text_area" class="materialize-textarea"></textarea>
                        <label for="text_area">Conteúdo</label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="waves-effect waves-light btn">Enviar<i class="mdi-content-send right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
