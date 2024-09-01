<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/css/menu.css" rel="stylesheet">
  </head>
  <body>
  <nav>
  <div>
        <img src="{{ asset('assets/img/itylogo.png') }}" width=60% alt=""> 
    </div> 

    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
   
    <div class="menu"> 
    <a href="">
      <li class="dropdown">Beranda
        <ul class="dropdown-content">
          <a href="">Profil</a>
        </ul>
      </li>
    </a>
        <a href="">Program Kerja</a>
        <a href="">
          <li class="dropdown">Kerjasama
        <ul class="dropdown-content">
          <a href="">Panduan Kerjasama</a>
          <a href="">Institut</a>
          <a href="">Fakultas</a>
          </ul>
        </li>
      </a>
        <a href="">Kemahasiswaan</a>   
      </div>
      <i class="bi bi-box-arrow-right fs-3"></i>
    </nav>

    <div class="image-container">
      <img src="{{ asset('assets/img/menu/1.jpg') }}" width=20% alt="">
      <img src="{{ asset('assets/img/menu/2.jpg') }}" width=20% height=200hv alt="">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>