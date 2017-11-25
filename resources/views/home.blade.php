@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div align="center" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h4>Postagens</h4>
                </div>

                <div class="panel-body">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div align="right" class="">
  <a href="{{url('admin/tela-criar')}}"><button  align="right" class="btn btn-primary" type="button" name="button">Criar Novo Post</button></a>
</div>
<table class="table">
<thead  class="thead-light">
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Título</th>
    <th scope="col">Criação</th>
    <th scope="col">Açoes</th>
  </tr>
</thead>

<tbody>
  @foreach($post as $postEdit)
  <tr>
    <th scope="row">{{$postEdit->id}}</th>
    <td>{{$postEdit->titulo}}</td>
    <td><?php echo date('d/m/Y', strtotime($postEdit->created_at)); ?></td>
    <td>
        <form action="{{url('/admin/editar')}}" method="GET">
        <button data-item="{{$postEdit->id}}" title="DELETAR!" class="apagar_post btn btn-danger" type="button" name="button"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
        <input type="hidden" name="id_post" value="{{$postEdit->id}}">
        <button type="submit" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
        </form>
    </td>
  </tr>
@endforeach
</tbody>

</table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('blog/js/sweetalert.min.js')}}"></script>
<script src="{{asset('blog/js/jquery-3.2.1.min.js')}}"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
      $(".apagar_post").click(function(){
        var id = $(this).data('item');
        swal({
          title: "Deletar Post",
          text: "Certeza que deseja deletar o post de ID "+id+"?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
    }).then((willDelete) => {
    if (willDelete) {
            // AJAX PARA DELEÇÂO DO POST
      $.ajax({
        'processing': true,
        'serverSide': true,
          url: "{{url('/delete')}}",
          type: 'GET',
          data: {
                  idpost: id,
              },
          beforeSend: function(){

          },
          success: function(result) {
              result = JSON.parse(result);
          },
          complete: function(){
            swal({
              title: 'Post apagado com sucesso!',
              text: "",
              type: 'warning',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'OK'
            }).then(function (result) {

                location.reload();

            })

          }
      });
          // FIM DO AJAX PARA DELEÇÂO DO POST




    } else {
      swal("Your imaginary file is safe!");
    }
    });
      });
    });
</script>
@endsection
