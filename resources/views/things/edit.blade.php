@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>Edit Thing</h2>
        <form method="POST" action="{{ route('things.update', $thing->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $thing->name }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $thing->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="wrnt">Warranty</label>
                <input type="date" class="form-control" id="wrnt" name="wrnt" value="{{ $thing->wrnt }}">
            </div>
            <div class="form-group">
                <label for="master">Master</label>
                <select class="form-control" id="master" name="master">
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $thing->master == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('things.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
