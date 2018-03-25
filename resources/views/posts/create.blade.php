@extends('layouts.master')


@section('content')
<div class="col-sm-8 blog-main">
    <h1>Publish a post </h1>

    <hr>


    <form  method="POST" action="/posts">
        {{csrf_field()}}<!--will return a hidden input >>we can use it to write the hidden input also-->
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="title">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="body" name="body" class="form-control"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
    </div>


@endsection