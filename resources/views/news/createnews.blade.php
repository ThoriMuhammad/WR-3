@extends('layouts.app')

@section('content')
    <h1>Tambah Berita</h1>
    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">Isi Berita</label>
            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection