<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="assets/css/profil.css" rel="stylesheet">
    <style>
        body {
            background-color: green;
            color: black; 
        }

        h1 {
            margin-bottom: 80px; 
        }

        p {
            margin-top: 10px; 
        }

        .menu-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            background-color: green;
            padding: 20px;
            border-radius: 8px;
        }

        .menu-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            max-width: 200px;
            background-color: white;
        }

        .menu-card-img {
            width: 150px; 
            height: 150px; 
            object-fit: cover; 
            border-radius: 8px; 
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <h1>Profil</h1>
    <p>Wakil Rektor III : Dr. Ir. Triyono, M.T.</p>
    <p>sub bagian : Ir. Handayani Sriwinarno, M.Par.</p>
    <p>ADM/Sekertaris : Ir. Handayani Sriwinarno, M.Par.</p>
    <p> Kemahasiswaan 1 : .</p>
    <p> Kemahasiswaan 2 : .</p>

    <div class="row menu-container">
        <div class="menu-card">
            <img src="{{ asset('assets/img/profil/10.jpg') }}" alt="espresso" class="menu-card-img" />
            <h3 class="menu-card-title"> wakil rektor </h3>
            <p class="menu-card-price"> Dr. Ir. Triyono, M.T.</p>
        </div>
        <div class="menu-card">
            <img src="{{ asset('assets/img/profil/10.jpg') }}" alt="espresso" class="menu-card-img" />
            <h3 class="menu-card-title">Sub bagian </h3>
            <p class="menu-card-price"> Ir. Handayani Sriwinarno, M.Par</p>
        </div>
        <div class="menu-card">
            <img src="{{ asset('assets/img/profil/10.jpg') }}" alt="espresso" class="menu-card-img" />
            <h3 class="menu-card-title"> sekertaris </h3>
            <p class="menu-card-price"></p>
        </div>
        <div class="menu-card">
            <img src="{{ asset('assets/img/profil/10.jpg') }}" alt="espresso" class="menu-card-img" />
            <h3 class="menu-card-title">kemahasiswaan 1</h3>
            <p class="menu-card-price"></p>
        </div>
        <div class="menu-card">
            <img src="{{ asset('assets/img/profil/10.jpg') }}" alt="espresso" class="menu-card-img" />
            <h3 class="menu-card-title">kemahasiswaan 2</h3>
            <p class="menu-card-price"></p>
        </div>
        
       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>