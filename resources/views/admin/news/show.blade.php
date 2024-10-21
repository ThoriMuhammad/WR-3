<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .news-image {
            max-width: 100%;
            height: auto;
            max-height: 400px; /* Adjust this value as needed */
            object-fit: contain;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $news->title }}</h1>
        <img src="{{ asset('storage/' . $news->image_path) }}" alt="{{ $news->title }}" class="img-fluid mb-3 news-image">
        <div>
            {!! $news->content !!}
        </div>
        <a href="{{ route('admin.news.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>