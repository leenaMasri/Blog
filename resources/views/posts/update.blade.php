@extends('layouts.appM')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('posts.update',$post->id) }}" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" value="{{ $post->title }}" id="exampleInputEmail1" name="title">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="body" name="body" value="{{ $post->body }}" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>

        </div>

        <!--  ('layouts.errors')-->
    </form>

    </div>


@endsection