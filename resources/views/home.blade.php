@extends('layout')
@section('content')
<div class="container">
    <div class="card mt-3">

            <div class="card-header text-center">
            Contents
            </div>
        @foreach ($posts as $post )
            <div class="card-body">
                <h5 class="card-title ">{{$post->name}}</h5>
                <p class="card-text">{{$post->description}}</p>
                <a href="#" class="btn btn-primary">View</a>
            </div><hr>
        @endforeach

        </div>
        <div class="float-end mt-3">
        {{$posts->links()}}
        </div>
    </div>
@endsection
