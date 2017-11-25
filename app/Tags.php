<?php

namespace blog;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable=[
        'nome'
    ];

    public function posts(){
        return $this->belongsToMany('blog\Posts', 'posts_tags');
    }
}
