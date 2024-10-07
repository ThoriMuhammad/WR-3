@extends('layouts.app')

@section('title', 'Manajemen Berita')

@section('content')
<div class="container">
    <h1>Manajemen Berita</h1>
    <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">Tambah Berita Baru</a>

    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Link</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($news as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td><img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}" width="100"></td>
                    <td><a href="{{ route('news.show', $item->id) }}">Lihat Berita</a></td>
                    <td>
                        <a href="{{ route('news.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('news.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada berita yang ditambahkan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.read-more').on('click', function(e) {
        e.preventDefault();
        var newsId = $(this).data('id');
        $.ajax({
            url: '/news/' + newsId,
            method: 'GET',
            success: function(response) {
                $('#newsDetail').html(response);
                $('#newsModal').modal('show');
            }
        });
    });
});
</script>
@endsection