<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Gate;
use blog\Posts;
use File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
  {
    if(Auth::check()){
          $post=Posts::orderBy('id', 'DESC')->get();
          return view('home', compact('post'));
        }
        return redirect(env('URL_ADMIN_LOGIN'));


    }

    public function editar(Request $request){

    if(Auth::check()){
        $post = Posts::where('id', $request->input('id_post'))->first();

        return view('editar', compact('post'));

      }
      return redirect(env('URL_ADMIN_LOGIN'));

    }


    public function salvar_editar(Request $request){



        $dados = array(
          'titulo' => $request->input('titulo'),
          'autor' => $request->input('autor'),
          'conteudo' => $request->input('conteudo'),
          //'imagem' => $request->input('imagem')
        );

        if($file = Input::file('imagem')){
            $destinationPath = public_path().DIRECTORY_SEPARATOR.'files';
            $fileName =   md5(uniqid(rand(), true));
            $fileName = $fileName.'.'.$file->extension();
            $file->move($destinationPath, $fileName);
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
          $destinationPath = public_path().DIRECTORY_SEPARATOR.'files';
          $fileName =  md5(uniqid(rand(), true));
          $fileName = $fileName.'.'.$file->extension();
          $file->move($destinationPath, $fileName);
          $dados['imagem'] = $fileName;
      }

        Posts::create($dados);


        return redirect(env('URL_ADMIN_LOGIN'));


    }

}
