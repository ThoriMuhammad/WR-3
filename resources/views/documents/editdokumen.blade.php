@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Document</h2>
    <form action="{{ route('documents.update', $document->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Document Name</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $document->nama) }}" required>
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label>Document Source</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="document_type" id="file_upload" value="file" {{ $document->file_path ? 'checked' : '' }}>
                <label class="form-check-label" for="file_upload">
                    File Upload
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="document_type" id="link" value="link" {{ $document->link ? 'checked' : '' }}>
                <label class="form-check-label" for="link">
                    Document Link
                </label>
            </div>
        </div>
        <div class="form-group mt-2" id="file_input" {{ $document->link ? 'style=display:none;' : '' }}>
            <label for="file">File</label>
            <input type="file" class="form-control-file @error('file') is-invalid @enderror" id="file" name="file">
            @if($document->file_path)
                <p>Current file: {{ basename($document->file_path) }}</p>
            @endif
            @error('file')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group" id="link_input" {{ $document->file_path ? 'style=display:none;' : '' }}>
            <label for="link">Document Link</label>
            <input type="url" class="form-control @error('link') is-invalid @enderror" id="link" name="link" value="{{ old('link', $document->link) }}">
            @error('link')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Update Document</button>
        </div>
    </form>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const fileUploadRadio = document.getElementById('file_upload');
        const linkRadio = document.getElementById('link');
        const fileInput = document.getElementById('file_input');
        const linkInput = document.getElementById('link_input');

        function toggleInputs() {
            if (fileUploadRadio.checked) {
                fileInput.style.display = 'block';
                linkInput.style.display = 'none';
            } else {
                fileInput.style.display = 'none';
                linkInput.style.display = 'block';
            }
        }

        fileUploadRadio.addEventListener('change', toggleInputs);
        linkRadio.addEventListener('change', toggleInputs);

        // Initial toggle based on saved data
        toggleInputs();
    });
</script>
@endpush
@endsection