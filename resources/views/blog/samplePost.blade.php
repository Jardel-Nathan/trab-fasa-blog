@extends('blog.template')
@section('content')
  <div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container valign">
        <br><br>
        <h1 class="header center grey-text text-darken-2">{{$post->titulo}}</h1>
        <div class="row center">
           <p class="post-meta"><i style="color: #616161" class="fa fa-clock-o"></i> 7 days ago by <a href="#" style="color: #616161">Author name</a></p>
        </div>
        <div class="row center">
          <a href="#startPosts" class="btn-floating btn-large waves-effect waves-light grey darken-2 head-link"><i class="fa fa-angle-double-down"></i></a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="https://s3-sa-east-1.amazonaws.com/bucket1jardel/{{$post->imagem}}" alt="Unsplashed background img 2"></div>
  </div>

<div class="container" id="startPosts">
	<br>
	<br>
    <br>
    <br>
      <div class="row">
          <div class="container">
            <div style="background-image: url('https://s3-sa-east-1.amazonaws.com/bucket1jardel/{{$post->imagem}}');" class="col-md-6">


            </div>
          </div>
      </div>
      <!-- Page Content -->

        <div class="row">

          <!-- Post Content Column -->
          <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">{{$post->titulo}}</h1>

            <!-- Author -->
            <p class="lead">
              Por
              <a href="#">{{$post->autor}}</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p><?php echo date('d/m/Y', strtotime($post->created_at)); ?></p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="{{asset('files')}}/{{$post->imagem}}" alt="">

            <hr>

            <!-- Post Content -->

              <p>{{$post->conteudo}}</p>

            <hr>



          </div>



        </div>
        <!-- /.row -->


      <!-- /.container -->
	<div class="row">


        @foreach($post->comentarios as $comentario)
            <div class="col s12 m10 offset-m1 l9 offset-l1 card-panel indigo lighten-5 black-text">
                <h5><em>Comentário</em></h5>
                    <p>{{$comentario->comentario}}</p>
                    <small>
                        Nome: {{$comentario->nome}}
                        <br>
                        Email: {{$comentario->email}}
                    </small>
            </div>
        @endforeach
        <br>
	</div>
</div>

<div class="container" id="startPosts">
    <br>
    <div class="row">
        <div class="col s12 m10 offset-m1 l9 offset-l1 card-panel grey lighten-5 black-text">

            <h6>Faça Seu Comentário</h6>
            <form class="col s12" action="/create/comment" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="post_id" value="{{ $post->id }}">

                <div class="row">
                    <div class="input-field col s12">
                        <input name="nome" id="message-sub" type="text" class="validate">
                        <label for="message-sub">Nome</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" id="message-sub" type="email" class="validate">
                        <label for="message-sub">Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="comentario" id="text_area" class="materialize-textarea"></textarea>
                        <label for="text_area">Comentário</label>
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

<style media="screen">
  .img-fluid{
    object-fit: cover !important;
    object-position: 50% 50% !important;
    height: 450px;
    width: 100%;
  }
</style>
