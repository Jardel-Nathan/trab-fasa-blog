<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Gate;
use blog\Posts;
use File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Contracts\Filesystem\Filesystem;
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
  {
<<<<<<< HEAD

=======
>>>>>>> feb5a1350fd99d8592c3c1e1c4d547812af6aeaf



    if(Auth::check()){
          $post=Posts::orderBy('id', 'DESC')->get();
          return view('home', compact('post'));
<<<<<<< HEAD


=======
        }
>>>>>>> feb5a1350fd99d8592c3c1e1c4d547812af6aeaf
        return redirect(env('URL_ADMIN_LOGIN'));


    }

    public function editar(Request $request){

<<<<<<< HEAD

        $post = Posts::where('id', $request->input('id_post'))->first();

        return view('editar', compact('post'));

=======
    if(Auth::check()){
        $post = Posts::where('id', $request->input('id_post'))->first();

        return view('editar', compact('post'));
>>>>>>> feb5a1350fd99d8592c3c1e1c4d547812af6aeaf

      }
      return redirect(env('URL_ADMIN_LOGIN'));

    }


    public function salvar_editar(Request $request){

<<<<<<< HEAD
=======

>>>>>>> feb5a1350fd99d8592c3c1e1c4d547812af6aeaf

        $dados = array(
          'titulo' => $request->input('titulo'),
          'autor' => $request->input('autor'),
          'conteudo' => $request->input('conteudo'),
          //'imagem' => $request->input('imagem')
        );

        if($file = Input::file('imagem')){
          $fileName =   md5(uniqid(rand(), true));
      $s3 = \Storage::disk('s3');
      //$filePath = '/arn:aws:s3:::bucket1jardel/' . $fileName;
      $s3->put($fileName, file_get_contents($file), 'public');
        $dados['imagem'] = $fileName;
        }
        posts::where('id', $request->input('id'))->update($dados);


      return redirect(env('URL_ADMIN_LOGIN'));

    }

    public function tela_criar(){
      if(Auth::check()){
      return view('criar');
    }
    }

    public function salvar_post(Request $request){

      $dados = array(
        'titulo' => $request->input('titulo'),
        'autor' => $request->input('autor'),
        'conteudo' => $request->input('conteudo'),
        //'imagem' => $request->input('imagem')
      );

      if($file = Input::file('imagem')){
        $fileName =   md5(uniqid(rand(), true));
<<<<<<< HEAD
        $s3 = \Storage::disk('s3');
        //$filePath = '/arn:aws:s3:::bucket1jardel/' . $fileName;
        $s3->put($fileName, file_get_contents($file), 'public');
          $dados['imagem'] = $fileName;
=======
      $s3 = \Storage::disk('s3');
      //$filePath = '/arn:aws:s3:::bucket1jardel/' . $fileName;
      $s3->put($fileName, file_get_contents($file), 'public');
        $dados['imagem'] = $fileName;
>>>>>>> feb5a1350fd99d8592c3c1e1c4d547812af6aeaf
      }

        Posts::create($dados);


        return redirect(env('URL_ADMIN_LOGIN'));


    }

}
