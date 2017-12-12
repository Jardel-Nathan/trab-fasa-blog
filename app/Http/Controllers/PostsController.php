<?php

namespace blog\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use blog\Posts;
use blog\Comentarios;
use File;
use Illuminate\Contracts\Filesystem\Filesystem;


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
        $fileName =   md5(uniqid(rand(), true));
      $s3 = \Storage::disk('s3');
      //$filePath = '/arn:aws:s3:::bucket1jardel/' . $fileName;
      $s3->put($fileName, file_get_contents($file), 'public');
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
