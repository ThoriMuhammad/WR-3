@extends('layouts.adminlayouts')

@section('title', 'Edit News')

@section('content')
    <h2>Edit News</h2>
    <div class="mt-2">
    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}" required>
        </div>

        <div class="mt-3">
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3" required>{{ $news->content }}</textarea>
        </div>

        <div class="mt-3">
        <div class="form-group">
            <label for="image">Current Image</label>
            <div>
                <img src="{{ asset('storage/' . $news->image_path) }}" alt="Current Image" style="max-width: 200px" class="mb-2">
            </div>
            <label for="image">Upload New Image (optional)</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <small class="form-text text-muted">Leave empty to keep the current image</small>
        </div>

        <div class="mt-3">
        <button type="submit" class="btn btn-primary">Update News</button>
        <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection