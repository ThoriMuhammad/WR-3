<!-- resources/views/layouts/app.blade.php -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title> <!-- Ini akan menampilkan judul halaman sesuai yang didefinisikan di setiap view -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/layouts.css') }}">
    @yield('additional_css')
  </head>
  <body>

    <!-- Navbar yang akan digunakan di semua halaman -->
    <nav>
    <div class="nav-left">
        <img src="{{ asset('assets/img/itylogo.png') }}" alt="ITY Logo">
    </div>
   
    </div>
    <div class="nav-right">
        <ul class="menu">
          <li class="dropdown">
            <a href="{{ url('menu') }}" class="menu-item" data-page="menu">BERANDA</a>
            <div class="dropdown-content">
                    <a href="{{ url('profil') }}">PROFIL</a>
                    <a href="{{ url('news-management') }}">BERITA</a>
            </div>
          </li>

          <li>
            <a href="{{ url('proker') }}" class="menu-item" data-page="proker">PROGRAM KERJA</a>
          </li>

          <li class="dropdown">
                <a href="#" class="menu-item" data-page="kerjasama">KERJASAMA</a>
                <div class="dropdown-content">
                    <a href="">PANDUAN KERJASAMA</a>
                    <a href="">INSTITUT</a>
                    <a href="">FAKULTAS</a>
                </div>
            </li>

            <li class="dropdown">
                <a href="" class="menu-item" data-page="kemahasiswaan">KEMAHASISWAAN</a>
                <div class="dropdown-content">
                    <a href="">INFORMASI KEMAHASISWAAN</a>
                    <a href="">WISUDA/ALUMNI</a>
                </div>
              </li>

              <li class="dropdown">
                <a href="" class="menu-item" data-page="Lainnya">LAINNYA</a>
                <div class="dropdown-content">
                    <a href="{{ url('documents') }}">UNDUH DOKUMEN</a>
                    <a href="">KONTAK</a>
                </div>
              </li>
        </ul>
        </ul>
        <i class="bi bi-box-arrow-right fs-3"></i>
    </div>
</nav>

    <!-- Tempat untuk konten halaman -->
    <div class="container mt-4">
      @yield('content')
    </div>
    @include('layouts.footer')
    @yield('scripts')
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
