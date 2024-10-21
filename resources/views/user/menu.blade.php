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
                        <h4 class="news-title">{{ Str::limit($item->title, 50, '...') }}</h4>
                        <a href="javascript:void(0)" class="card-link text-center read-more" data-id="{{ $item->id }}">Selengkapnya</a>
                    </div>
                </div>
            @endforeach
        @else
            <p>Belum ada berita yang ditambahkan.</p>
        @endif
    </div>

    <!-- Modal -->
    <div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="newsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newsModalLabel">Detail Berita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3 id="modalTitle" class="mb-3"></h3>
                    <div id="modalDate" class="text-muted mt-3 small"></div>
                    <div id="modalImage" class="text-center mb-3"></div>  
                    <div id="modalContent"></div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script>
        $(document).ready(function() {
            $('.read-more').on('click', function(e) {
                e.preventDefault();
                var newsId = $(this).data('id');
                
                $.ajax({
                    url: '/user/news/' + newsId,
                    method: 'GET',
                    success: function(response) {
                        $('#modalTitle').text(response.title);
                        $('#modalContent').html(response.content);
                        $('#modalImage').html('<img src="' + response.image + '" alt="' + response.title + '" class="img-fluid">');
                        $('#modalDate').text('Dipublikasikan: ' + response.date);
                        $('#newsModal').modal('show');
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr);
                        alert('Terjadi kesalahan saat memuat berita');
                    }
                });
            });

            // Bersihkan modal saat ditutup
            $('#newsModal').on('hidden.bs.modal', function() {
                $('#modalTitle').text('');
                $('#modalContent').html('');
                $('#modalImage').html('');
                $('#modalDate').text('');
            });
        });
        </script>
    @endpush
@endsection