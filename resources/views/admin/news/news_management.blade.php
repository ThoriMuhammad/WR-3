@extends('layouts.adminlayouts')

@section('title', 'News Management')

@section('content')
<div class="container">
    <h1 class="text-center">News Management</h1>
    <a href="{{ route('admin.news.create') }}" class="btn btn-success mb-3">Add New News</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($news as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td><img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}" width="100"></td>
                    <td><a href="{{ route('admin.news.show', $item->id) }}">Lihat Berita</a></td>
                    <td>
                        <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" style="display:inline;">
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