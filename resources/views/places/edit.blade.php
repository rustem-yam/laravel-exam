@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>Edit Place</h2>
        <form method="POST" action="{{ route('places.update', $place->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $place->name }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $place->description }}</textarea>
            </div>
            <div class="form-group">
                <label>Status:</label><br>
                
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="need_repair" value="need_repair" {{ $place->repair ? 'checked' : '' }}>
                    <label class="form-check-label" for="need_repair">Need Repair</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="in_work" value="in_work" {{ $place->work ? 'checked' : '' }}>
                    <label class="form-check-label" for="in_work">In Work</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('places.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
