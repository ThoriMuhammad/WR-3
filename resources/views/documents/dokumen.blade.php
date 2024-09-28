@extends('layouts.app')

@section('title', 'dokumen') <!-- Menentukan judul halaman -->
@section('additional_css')

@endsection

@section('content')
<h1 class="text-center">Dokumen</h1>
<a href="{{ route('documents.create') }}" class="btn btn-success">Add New Document</a>

<table class="table mt-3">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama File</th>
            <th>Link/File</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($documents as $document)
        <tr>
            <td>{{ $document->formatted_no }}</td>
            <td>{{ $document->nama }}</td>
            <td>
                @if($document->file_path)
                    <a href="{{ route('documents.download', $document) }}" class="btn btn-sm btn-primary">Download File</a>
                @elseif($document->link)
                    <a href="{{ $document->link }}" target="_blank" class="btn btn-sm btn-primary">View Document</a>
                @else
                    No file or link available
                @endif
            </td>
            <td>{{ $document->updated_at }}</td>
            <td>
                <!-- @if($document->file_path)
                    <a href="{{ route('documents.download', $document) }}" class="btn btn-sm btn-primary">Download</a>
                @endif -->
                <a href="{{ route('documents.edit', $document->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                <form action="{{ route('documents.destroy', $document->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-sm btn-danger delete-btn">Delete</button>               
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const form = this.closest('form');
            
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                    Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                    });
                }
            });
        });
    });
});
</script>
@endsection

