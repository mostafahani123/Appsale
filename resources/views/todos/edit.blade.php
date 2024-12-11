@extends('layout')

@section('content')
    <h1>Edit Todo</h1>



    <form method="POST" action="{{ route('todos.update', $todo) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="title" name="title" value="{{ $todo->title }}" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="description" value="{{ $todo->description }}">
        </div>
        <div class="form-check">
            <div>
                <label>Completed</label>
                <input type="checkbox" name="is_completed" value="1" {{ $todo->is_completed ? 'checked' : '' }}>
            </div>        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>


@endsection
