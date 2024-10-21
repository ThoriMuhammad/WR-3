<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="container">
    <div class="row">
        <div class="col-12">
            <h3>{{ $news->title }}</h3>
            
            @if($news->image_path)
            <div class="text-center mb-3">
                <img src="{{ asset('storage/' . $news->image_path) }}" 
                     alt="{{ $news->title }}" 
                     class="img-fluid">
            </div>
            @endif
            
            <div class="news-content">
                {!! $news->content !!}
            </div>
            
            <div class="text-muted mt-3">
                <small>Dipublikasikan: {{ $news->created_at->format('d M Y H:i') }}</small>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>