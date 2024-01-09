@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>Create Place</h2>
        <form method="POST" action="{{ route('places.store') }}">
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
                <label>Status:</label><br>
                
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="need_repair" value="need_repair">
                    <label class="form-check-label" for="need_repair">Need Repair</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="in_work" value="in_work">
                    <label class="form-check-label" for="in_work">In Work</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
