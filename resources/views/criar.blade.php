@extends('layouts.app')

@section('content')

<form action="{{url('/admin/salvar-criar')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="container">
    <div class="row">
        <div align="center" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Postagens</div>

                <div class="panel-body">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <div class="container-fluid">
  <div class="row">
    <input type="hidden" name="id" value="">
  <div class="form-group col-md-6">
    <label for="exampleFormControlInput1">Título do post</label>
    <input type="text" class="form-control" name="titulo" value="" >
  </div>

  <div class="form-group col-md-6">
    <label for="exampleFormControlInput1">Autor</label>
    <input type="text" class="form-control" name="autor" value="" >
  </div>

  <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Conteudo</label>
    <textarea class="form-control" name="conteudo" id="exampleFormControlTextarea1" rows="10"></textarea>
  </div>

  <div class="form-group col-md-8">
    <label for="exampleFormControlTextarea1">Imagem</label>
    <img  class="foto-post" src="" alt="">
  </div>
  <div class="form-group col-md-4">
        <label style="background-color: #35962e !important; color:white; margin-top: 50%;" class="btn btn-default" for="upload-file-selector">
            <input  id="upload-file-selector" class="input-img-post" type="file" name="imagem" style="display:none" >Trocar Imagem</label>
  </div>

</div>
<div align="right" class="col-md-12">
  <button type="submit" class="btn btn-primary" name="button">Salvar Post</button>
</div>
</div>


                </div>
            </div>
        </div>
    </div>

</div>
</form>
<script src="{{asset('blog/js/sweetalert.min.js')}}"></script>
<script src="{{asset('blog/js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript">
$(".input-img-post" ).change(function() {
  readURL(this);
  function readURL(input) {
  if (input.files && input.files[0]) {
   var reader = new FileReader();
   reader.onload = function(e) {
     $('.foto-post').attr('src', e.target.result);
   }

   reader.readAsDataURL(input.files[0]);
 }
}
});
</script>
<style media="screen">
  .foto-post{
    width: 100%;
    height: 230px;
    object-fit: cover !important;
    object-position: 50% 50% !important;
  }
</style>
@endsection
