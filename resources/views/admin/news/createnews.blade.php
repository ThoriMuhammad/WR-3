@extends('layouts.adminlayouts')

@section('title', 'Create News')

@section('content')
    <h2>Upload New News</h2>
    <div class="mt-2">
    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mt-3">
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
        </div>
        <div class="mt-3">
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>
        <div class="mt-3">
        <button type="submit" class="btn btn-primary">Upload News</button>
    </form>
@endsection