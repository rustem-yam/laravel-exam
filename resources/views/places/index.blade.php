@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
          <h2>All Places</h2>
          <a href="{{ route('places.create') }}" class="btn btn-primary">Create New Place</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($places as $place)
                    <tr>
                        <th scope="row">{{ $place->id }}</th>
                        <td>{{ $place->name }}</td>
                        <td>{{ $place->description }}</td>
                        <td>
                            @if($place->repair)
                                Need Repair
                            @elseif($place->work)
                                In Work
                            
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('places.show', $place->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('places.edit', $place->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('places.destroy', $place->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this place?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
