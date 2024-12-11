@extends('layout')

@section('content')
    <h1>Add Todo</h1>


    <form method="POST" action="{{ route('todos.store') }}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">TITLE :</label>
          <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="title">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="description">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection
