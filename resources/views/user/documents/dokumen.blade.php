@extends('layouts.app')

@section('title', 'dokumen') <!-- Menentukan judul halaman -->
@section('additional_css')

@endsection

@section('content')
<h1 class="text-center">Dokumen</h1>

<table class="table mt-3">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama File</th>
            <th>Link/File</th>
            <th>Updated</th>
        </tr>
    </thead>
    <tbody>
        @foreach($documents as $document)
        <tr>
            <td>{{ $document->formatted_no }}</td>
            <td>{{ $document->nama }}</td>
            <td>
                @if($document->file_path)
                    <a href="{{ route('user.documents.download', $document) }}" class="btn btn-sm btn-primary">Download File</a>
                @elseif($document->link)
                    <a href="{{ $document->link }}" target="_blank" class="btn btn-sm btn-primary">View Document</a>
                @else
                    No file or link available
                @endif
            </td>
            <td>{{ $document->updated_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

