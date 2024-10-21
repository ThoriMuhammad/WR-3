<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Document;

class DashboardController extends Controller
{
    public function index()
    {
        $newsCount = News::count();
        $documentsCount = Document::count();
        return view('admin.dashboard', compact('newsCount', 'documentsCount'));
    }
}