@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $news->title }}</h1>
    <img src="{{ asset('storage/' . $news->image_path) }}" alt="{{ $news->title }}" class="img-fluid mb-3">
    <div>
        {!! $news->content !!}
    </div>
    <a href="{{ route('news.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection