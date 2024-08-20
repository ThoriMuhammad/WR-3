<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="asset/css/menu.css" rel="stylesheet">
  </head>
  <body>
  <header>
    <h2>MovFast</h2>
    <nav>
      <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Profil</a></li>
        <li><a href="#">Data Pegawai</a></li>
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="{{ url('logout') }}">Logout</a></li>
      </ul>
    </nav>
  </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>