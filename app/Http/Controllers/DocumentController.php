<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::all();
        $documents = Document::orderBy('no')->get();
        return view('documents.dokumen', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documents.createdokumen');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'link' => 'nullable|url',
        ]);
    
        $document = new Document();
    $document->nama = $request->nama;

    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $path = $file->store('documents', 'public');
        $document->file_path = $path;
    } elseif ($request->filled('link')) {
        $document->link = $request->link;
    } else {
        return back()->withErrors(['error' => 'Please provide either a file or a link.']);
    }

    $document->save();

    return redirect()->route('documents.index')->with('success', 'Document uploaded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        return view('documents.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        return view('documents.editdokumen', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'document_type' => 'required|in:file,link',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'link' => 'nullable|url',
        ]);
    
        $document->nama = $validated['nama'];
    
        if ($request->document_type == 'file') {
            if ($request->hasFile('file')) {
                // Delete old file if exists
                if ($document->file_path) {
                    Storage::disk('public')->delete($document->file_path);
                }
                // Handle file upload
                $filePath = $request->file('file')->store('documents', 'public');
                $document->file_path = $filePath;
            }
            $document->link = null;
        } elseif ($request->document_type == 'link') {
            // Delete old file if exists
            if ($document->file_path) {
                Storage::disk('public')->delete($document->file_path);
            }
            $document->link = $validated['link'];
            $document->file_path = null;
        }
        
        $document->save();

        return redirect()->route('documents.index')->with('success', 'Document updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $document = Document::findOrFail($id);
        
        if ($document->file_path) {
            Storage::disk('public')->delete($document->file_path);
        }
        
        $document->delete();
    
        return redirect()->route('documents.index')->with('success', 'Document deleted successfully');
    }

    public function download(Document $document)
    {
        // $document = Document::findOrFail($id);
    
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
