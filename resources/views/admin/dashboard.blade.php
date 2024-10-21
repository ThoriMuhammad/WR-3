<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.adminlayouts')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">News Overview</h5>
                <p class="card-text">Total News Articles: {{ $newsCount ?? 0 }}</p>
                <a href="{{ route('admin.news.index') }}" class="btn btn-primary">Manage News</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Documents Overview</h5>
                <p class="card-text">Total Documents: {{ $documentsCount ?? 0 }}</p>
                <a href="{{ route('admin.documents.index') }}" class="btn btn-primary">Manage Documents</a>
            </div>
        </div>
    </div>
</div>
@endsection