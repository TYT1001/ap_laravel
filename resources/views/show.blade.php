@extends('layout')
@section('content')
<div class="container">

    <div class="card mt-5">

        <div class="card-header text-center">
            Contents
        </div>


            <div class="card-body">
                <h5 class="card-title ">{{$post->name}}</h5>
                <p class="card-text">{{$post->description}}</p>
                <div>
                    <a href="/posts" class="btn btn-success">Back</a>
                </div>
            </div><hr>


    </div>

    </div>
@endsection
