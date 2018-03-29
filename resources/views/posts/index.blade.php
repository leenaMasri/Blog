@extends('layouts.appM')

@section('content')

    <div class="col-sm-9 blog-main">

            @foreach ($posts as $post)
                @include('posts.post')
            @endforeach
    </div>
@endsection
