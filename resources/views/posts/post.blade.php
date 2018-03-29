


<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8  blog-main">

            <div class="row">

                    <div class="blog-post">

                <h2 class="blog-post-title">
                    <a href="/posts/{{$post->id}}">
                        {{ $post->title }}
                    </a>

                </h2>
                <p class="blog-post-meta">

                    {{$post->created_at->toFormattedDateString()}} by <a href="#">{{$post->user->name}}</a>

                </p>

                <p>{{$post->body}}</p>
                <hr>

                     <form action="{{ route('posts.destroy',$post->id) }}" method="POST">


                         <a class="btn btn-info" href="service/post/view">Show</a>

                         @if( auth()->id()== $post->user_id)
                         <a class="btn btn-primary" href="{{ route('posts.update',$post->id) }}"> Update</a>


                             <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                             <input type="hidden" name="_method" value="{{'DELETE'}}">

                             <button type="submit" class="btn btn-danger">Delete</button>
                         @endif
                     </form>



        </div>
     </div>
        </div>
    </div>
    </main>


