<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Illuminate\Support\Facades\Auth;
class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','view']);
    }
    public function view()
    {
        // get current logged in user
        $user = Auth::user();

        // load post
        $post = Post::find(1);

        if ($user->can('view', $post)) {
            //echo "Current logged in user is allowed to update the Post: {$post->id}";
            return view('posts.show',compact('post'));
        } else {
            echo 'Not Authorized.';
        }
    }
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }


    public function index()//will respond to /posts
    {
        $posts= Post::latest()->get();
        return view('posts.index', compact('posts'));//index now have acesss to a set of posts
    }


     public function create()
    {

        // get current logged in user
        $user = Auth::user();

        if ($user->can('create', Post::class)) {
            //echo 'Current logged in user is allowed to create new posts.';
              return view('posts.create', compact('post'));


        } else {
            return redirect('/');
        }

        exit;
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
         //$post->save();
        //redirect to the homepage
        $this->validate(request(),[
            'title' => 'required',
            'body'  => 'required'

            ]);


        auth()->user()->publish(
            new Post(request(['title','body']))
        );





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


  /*public function update(Post $post)
        // PARCH /posts/id
    {
        // get current logged in user
        $user = Auth::user();

        // load post
        $post = Post::find(1);

        if ($user->can('update', $post)) {
            echo "Current logged in user is allowed to update the Post: {$post->id}";
        } else {
            echo 'Not Authorized.';
        }
    }
  /*
    public function update(Request $request, Post $post)
    {
        $this->validate($request,[
            'name' => 'required',
            'detail' => 'required',
        ]);


        $post->update($request->all());


        return redirect()->route('posts.index')
            ->with('success','Post updated successfully');
    }*/


    /*  public function delete()
      {
          // get current logged in user
          $user = Auth::user();

          // load post
          $post = Post::find(1);

          if ($user->can('delete', $post)) {
              //echo "Current logged in user is allowed to delete the Post: {$post->id}";
              $post->delete();


              return redirect()->route('posts.index')
                  ->with('success','Post deleted successfully');
          } else {
              echo 'Not Authorized.';
          }
      }*/
    public function update(Post $post)
    {
        return view('posts.update',compact('post'));
    }

    public function destroy(Post $post) // DELETE /posts/id
    {
        $post->delete();


        return redirect()->route('posts.index')
            ->with('success','Post deleted successfully');
    }

    /**
     * Store the incoming blog post.
     *
     * @param  StoreBlogPost  $request
     * @return Response
     */


}
