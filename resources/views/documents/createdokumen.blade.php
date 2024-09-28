@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Upload New Document</h2>
    <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Document Name</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label>Document Source</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="document_type" id="file_upload" value="file" checked>
                <label class="form-check-label" for="file_upload">
                    File Upload
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="document_type" id="link" value="link">
                <label class="form-check-label" for="link">
                    Document Link
                </label>
            </div>
        </div>
        <div class="form-group mt-2" id="file_input">
            <label for="file">File</label>
            <input type="file" class="form-control-file @error('file') is-invalid @enderror" id="file" name="file">
            @error('file')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group" id="link_input" style="display: none;">
            <label for="link">Document Link</label>
            <input type="url" class="form-control @error('link') is-invalid @enderror" id="link" name="link" value="{{ old('link') }}">
            @error('link')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-3">
        <button type="submit" class="btn btn-primary upload-btn">Upload Document</button>
    </form>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
});
// document.addEventListener('DOMContentLoaded', function() {
//     const uploadButtons = document.querySelectorAll('.upload-btn');
//     uploadButtons.forEach(button => {
//         button.addEventListener('click', function(e) {
//             e.preventDefault();
//             const form = this.closest('form');
//         Swal.fire({
//             position: "top-end",
//             icon: "success",
//             title: "Your work has been saved",
//             showConfirmButton: false,
//             timer: 1500
//             });
//         });
//     });
// });
</script>
@endsection
