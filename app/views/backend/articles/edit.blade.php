@extends('backend.layouts.app')

@section('content')
    <form style="max-width: 900px;" action="../update" method="POST">
        <input type="hidden" name="id" value="{{ $article['id'] }}">
        <div class="form-group">
            <label for="input-title">Title</label>
            <input id="input-title" class="form-control" type="text" name="title" value="{{ $article['title'] }}" required>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="input-description">Description</label>
                <textarea id="input-description" class="form-control" rows="6" name="description" required>{{ $article['description'] }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
@endsection