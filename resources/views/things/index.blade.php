@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
          <h2>All Things</h2>
          <a href="{{ route('things.create') }}" class="btn btn-primary">Create New Thing</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Warranty</th>
                    <th scope="col">Master</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($things as $thing)
                    <tr>
                        <th scope="row">{{ $thing->id }}</th>
                        <td>{{ $thing->name }}</td>
                        <td>{{ $thing->description }}</td>
                        <td>{{ $thing->wrnt }}</td>
                        <td>{{ $thing->owner->name }}</td>
                        <td>
                            <a href="{{ route('things.show', $thing->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('things.edit', $thing->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('things.destroy', $thing->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this thing?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
