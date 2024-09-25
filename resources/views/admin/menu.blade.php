@extends('layouts.app')

@section('title', 'menu') <!-- Menentukan judul halaman -->
@section('additional_css')
<link href="{{ asset('assets/css/menu.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="gallery-container">
        <div class="gallery">
            <div class="gallery-item">
                <img src="{{ asset('assets/img/menu/3.jpg') }}" alt="ITY Image 1">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('assets/img/menu/image.png') }}" alt="ITY Image 2">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('assets/img/menu/4.jpg') }}" alt="ITY Image 3">
            </div>
        </div>
    </div>

    <div  style="margin-top: 100px;">

    <div class="kotak-container">
    <div class="header-kotak">
        <a href="" class="btn btn-success">Tambah Berita</a>
        <h3 class="text-center"><strong>Berita & Agenda</strong></h3> 
    </div>
        <div class="kotak">
            <div class="gambar">
            <img src="{{ asset('assets/img/menu/5.jpeg') }}" alt="ITY Image 5">
            </div>
            <div class="teks">
                <h3>Judul Berita 1</h3>
                <p>Ini adalah deskripsi singkat atau konten berita 1.</p>
            </div>
        </div>

        <div class="kotak">
            <div class="gambar">
                <img src="{{ asset('assets/img/menu/5.jpeg') }}" alt="ITY Image 5">
            </div>
            <div class="teks">
                <h3>Judul Berita 2</h3>
                <p>Ini adalah deskripsi singkat atau konten berita 2.</p>
            </div>
        </div>

        <div class="kotak">
            <div class="gambar">
                <img src="{{ asset('assets/img/menu/5.jpeg') }}" alt="ITY Image 5">
            </div>
            <div class="teks">
                <h3>Judul Berita 3</h3>
                <p>Ini adalah deskripsi singkat atau konten berita 3.</p>
            </div>
        </div>
    </div>

@endsection