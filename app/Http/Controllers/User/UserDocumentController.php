<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserDocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        $documents = Document::orderBy('no')->get();
        return view('user.documents.dokumen', compact('documents'));
    }

    public function download(Document $document)
    {
    
        if (!$document->file_path) {
            return redirect()->back()->with('error', 'No file available for download');
        }
    
        $originalExtension = pathinfo($document->file_path, PATHINFO_EXTENSION);
        $downloadName = Str::slug($document->nama) . '.' . $originalExtension;
    
        return Storage::disk('public')->download(
            $document->file_path, 
            $downloadName, 
            ['Content-Type' => $document->mime_type]
        );
    }
}
