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
            <form action="/posts" method="post">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">

                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <input type="text" class="form-control" id="description" placeholder="Enter Description" name="description">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

                    <a href="/posts" class="btn btn-success">Back</a>

              </form>




        </div>


    </div>

    </div>
@endsection
