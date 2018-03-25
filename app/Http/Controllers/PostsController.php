<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()//will respond to /posts
    {
        $posts= Post::latest()->get();
        return view('posts.index', compact('posts'));//index now have acesss to a set of posts
    }

    public function show(Post $post)//GET /posts/id
    {
        //$post = Post::find($id);
        return view('posts.show', compact('post'));// we can use route binding
    }

    public function create()///posts/create
    {
        return view('posts.create');
    }

    public function store()
    {
        //create a new post
       // $post = new \App\Post;//$post new Post;
        /*
        $post->title= request('title');
        $post->body=  request('body');*/
        // another way you give it the fields & it will be automatically saving it




        //save it to the database
     //  $post->save();
        //redirect to the homepage
        $this->validate(request(),[
            'title' => 'required',
            'body'  => 'required'

            ]);



        Post::create(request(['title','body']));
        return redirect('/');


        //dd(request()->all());//may be there is  a user_id hidden and maybe the user_id can be changed
       // dd(request('title'));
       // dd(request(['title','body']));
        // POST /Posts
        //create a new post using the request data &save itto the database&then redirect to somewhere



    }

    public function edit()
    {
        // GET /posts/id/edit
    }

    public function update()
    {
        // PARCH /posts/id
    }

    public function destroy($id)
    {
        // DELETE /posts/id
    }

}
