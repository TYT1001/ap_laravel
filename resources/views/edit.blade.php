@extends('layout')
@section('content')
<div class="container">

    <div class="card mt-3">

        <div class="card-header text-center">
            Contents
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">
            <form action="/posts/{{$post->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{old('name',$post->name)}}">

                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description',$post->description)}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>

                    <a href="/posts" class="btn btn-success">Back</a>

              </form>




        </div>


    </div>

    </div>
@endsection
