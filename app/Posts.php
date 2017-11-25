<?php

namespace blog;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable=[
      'titulo',
      'conteudo',
      'autor',
      'imagem'
    ];

    public function comentarios(){
        return $this->hasMany(
            'blog\Comentarios',
            'post_id');
    }

    public function tags(){
        return $this->belongsToMany(
            'blog\Tags',
            'posts_tags');
    }
}
