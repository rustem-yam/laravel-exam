@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>Place Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $place->name }}</h5>
                <p class="card-text">Description: {{ $place->description }}</p>
                <p class="card-text">Status:
                    @if($place->repair)
                        Need Repair
                    @elseif($place->work)
                        In Work
                    
                    @endif
                </p>
                <a href="{{ route('places.index') }}" class="btn btn-primary">Back</a>
                <a href="{{ route('places.edit', $place->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('places.destroy', $place->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
