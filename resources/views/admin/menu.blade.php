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

    <div style="margin-top: 100px;">
        <div class="kotak-container">
            <div class="header-kotak">
                <h3 class="text-center"><strong>Berita & Agenda</strong></h3>
            </div>
            
            @if(isset($news) && $news->count() > 0)
                @foreach($news as $item)
                    <div class="kotak">
                        <div class="gambar">
                            <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}">
                        </div>
                        <div class="teks">
                            <h4>{{ $item->title }}</h4>
                            <a href="{{ route('news.show', $item->id) }}" class="card-link text-center read-more" data-id="{{ $item->id }}">Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Belum ada berita yang ditambahkan.</p>
            @endif
        </div>
    </div>

    <!-- <div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="newsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newsModalLabel">Detail Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="newsDetail"> -->
                    <!-- News detail will be loaded here -->
                <!-- </div>
            </div>
        </div>
    </div> -->

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    </script> -->
@endsection