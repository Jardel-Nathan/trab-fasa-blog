<?php

namespace blog\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use blog\Posts;
use blog\Comentarios;
use File;


class PostsController extends Controller
{

    private $posts;
    private $comment;

    public function __construct(Posts $posts,
                                Comentarios $comment){
        $this->posts = $posts;
        $this->comment = $comment;
    }

    public function posts(){



        $posts = $this->posts->orderBy('id', 'desc')->paginate(10);
        return view('blog.index',
              compact('posts'));


    }

    public function detail($post_id){

        $post = $this->posts->find($post_id);
        return view('blog.samplePost', compact('post'));

    }

    public function form(){

        return view('blog.postCreate');

    }

    public function create(Request $request){
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

        $this->posts->create($dados);

        return redirect('/');

    }

    public function comment(Request $request){

        $this->comment->create($request->all());

        return redirect()->route('/detail',
            $request->post_id);

    }

    public function delete(Request $request){

      $id = ($request->input('idpost'));

      if($this->posts->find($id)->delete()){
        return 'true';
      }

    }

}
