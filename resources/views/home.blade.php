@extends('layout')
@section('content')
<div class="container">
    <div>
        <a href="/posts/create" class="btn btn-success">New Post</a>
    </div>
    <div class="card mt-3">

        <div class="card-header text-center">
            Contents
        </div>

        @foreach ($posts as $post )
            <div class="card-body">
                <h5 class="card-title ">{{$post->name}}</h5>
                <p class="card-text">{{$post->description}}</p>
                <a href="/posts/{{$post->id}}" class="btn btn-primary">View</a>
                <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
                <form action="/posts/{{$post->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div><hr>
        @endforeach

    </div>
    <div class="float-end mt-3">
        {{$posts->links()}}
    </div>
    </div>
@endsection
