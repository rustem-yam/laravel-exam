@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>Create New Thing</h2>
        <form method="POST" action="{{ route('things.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="wrnt">Warranty</label>
                <input type="date" class="form-control" id="wrnt" name="wrnt">
            </div>
            <div class="form-group">
                <label for="master">Master</label>
                <select class="form-control" id="master" name="master">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
