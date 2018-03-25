<?php

namespace App;



class Comment extends Model
{
    //comment->post == i have a comment and i wanna fetch the associated post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
