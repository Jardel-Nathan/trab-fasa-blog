<?php

namespace blog;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $fillable=[
        'post_id',
        'nome',
        'email',
        'comentario',
    ];

    public function posts(){
        return $this->belongsTo('blog/Posts');
    }
}
