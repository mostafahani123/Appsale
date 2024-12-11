@extends('layout')

@section('content')
    <h1>Todos</h1>
    <a class="btn btn-danger" href="{{ route('todos.create') }}" class="btn btn-primary">Add Todo</a>
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
              </tr>
        </thead>

    <ul>


        <tbody>
            @foreach($todos as $todo)
          <tr>
            <th scope="row">{{ $todo->id }}</th>
            <td>{{ $todo->title }}</td>
            <td>{{ $todo->description }}</td>
            <td>
                <a class="btn btn-success" href="{{ route('todos.edit', $todo) }}">Edit</a>

                <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
          </tr>
          @endforeach


        </tbody>
      </table>
    </ul>
@endsection
