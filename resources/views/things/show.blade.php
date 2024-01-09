@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>Thing Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $thing->name }}</h5>
                <p class="card-text">Description: {{ $thing->description }}</p>
                <p class="card-text">Warranty: {{ $thing->wrnt }}</p>
                <p class="card-text">Master: {{ $thing->owner->name }}</p>
                <a href="{{ route('things.index') }}" class="btn btn-primary">Back</a>
                <a href="{{ route('things.edit', $thing->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('things.destroy', $thing->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this thing?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
