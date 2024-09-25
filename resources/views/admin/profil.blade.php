@extends('layouts.app')

@section('title', 'Profil - Institut Teknologi Yogyakarta')

@section('additional_css')
<link href="{{ asset('assets/css/profil.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
@endsection

@section('content')
<div class="container">   
<h1 class="text-center text-success my-5" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 32px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
        PROFILE INSTITUT TEKNOLOGI YOGYAKARTA
    </h1>
    <div  style="margin-top: 100px;">
    <p><strong>Wakil Rektor III:</strong> Dr. Ir. Triyono, M.T.</p>
    <p><strong>Sub Bagian:</strong> Ir. Handayani Sriwinarno, M.Par.</p>
    <p><strong>ADM/Sekertaris:</strong> Ir. Handayani Sriwinarno, M.Par.</p>
    <p><strong>Kemahasiswaan 1:</strong> .</p>
    <p><strong>Kemahasiswaan 2:</strong> .</p>
    <div  style="margin-top: 200px;">
    <h2 class="text-center mb-4">Profil Wakil Rektor III</h2>

    <!-- Menu Cards -->
    <div class="container">
        <div class="menu-container">
            <div class="menu-card">
                <img src="{{ asset('assets/img/profil/10.jpg') }}" alt="Wakil Rektor" class="menu-card-img" />
                <h3 class="menu-card-title">Wakil Rektor</h3>
                <p class="menu-card-price">Dr. Ir. Triyono, M.T.</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset('assets/img/profil/10.jpg') }}" alt="Sub Bagian" class="menu-card-img" />
                <h3 class="menu-card-title">Sub Bagian</h3>
                <p class="menu-card-price">Ir. Handayani Sriwinarno, M.Par</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset('assets/img/profil/10.jpg') }}" alt="Sekretaris" class="menu-card-img" />
                <h3 class="menu-card-title">Sekretaris</h3>
                <p class="menu-card-price">Ir. Handayani Sriwinarno, M.Par.</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset('assets/img/profil/10.jpg') }}" alt="Kemahasiswaan 1" class="menu-card-img" />
                <h3 class="menu-card-title">Kemahasiswaan 1</h3>
                <p class="menu-card-price">Ir. Handayani Sriwinarno, M.Par.</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset('assets/img/profil/10.jpg') }}" alt="Kemahasiswaan 2" class="menu-card-img" />
                <h3 class="menu-card-title">Kemahasiswaan 2</h3>
                <p class="menu-card-price">Ir. Handayani Sriwinarno, M.Par.</p>
            </div>
        </div>
    </div>


    <div  style="margin-top: 150px;">
    <!-- Target Sections -->
    <div id="wakil-rektor">
    <h2 style="color: black;">Wakil Rektor</h2>
    <p style="font-size: 24px; color: black;"><strong>Informasi Detail Tentang Wakil Rektor</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Nama :</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Jabatan :</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Email :</strong></p>
    <p style="font-size: 24px; color: black;"><strong>Riwayat pendidikan</strong></p>
    <p style="font-size: 16px; color: black;"><strong>S1</strong></p>
    <p style="font-size: 16px; color: black;"><strong>S2</strong></p>
    <p style="font-size: 16px; color: black;"><strong>S3</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Riwayat organisasi :</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Penghargaan :</strong></p>

        <div  style="margin-top: 150px;">
    <div id="sub-bagian">
    <h2 style="color: black;">Sub bagian</h2>
    <p style="font-size: 16px; color: black;"><strong>Nama :</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Jabatan :</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Email :</strong></p>
    <p style="font-size: 24px; color: black;"><strong>Riwayat pendidikan</strong></p>
    <p style="font-size: 16px; color: black;"><strong>S1</strong></p>
    <p style="font-size: 16px; color: black;"><strong>S2</strong></p>
    <p style="font-size: 16px; color: black;"><strong>S3</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Riwayat organisasi :</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Penghargaan :</strong></p>
    </div>
    <div  style="margin-top: 150px;">

    <div id="sekertaris">
       <h2 style="color: black;">Sekertaris</h2>
    <p style="font-size: 16px; color: black;"><strong>Nama :</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Jabatan :</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Email :</strong></p>
    <p style="font-size: 24px; color: black;"><strong>Riwayat pendidikan</strong></p>
    <p style="font-size: 16px; color: black;"><strong>S1</strong></p>
    <p style="font-size: 16px; color: black;"><strong>S2</strong></p>
    <p style="font-size: 16px; color: black;"><strong>S3</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Riwayat organisasi :</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Penghargaan :</strong></p>
       
    </div>
    <div  style="margin-top: 150px;">


    <div id="kemahasiswaan1">
    <h2 style="color: black;">kemahasiswaan1</h2>
    <p style="font-size: 16px; color: black;"><strong>Nama :</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Jabatan :</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Email :</strong></p>
    <p style="font-size: 24px; color: black;"><strong>Riwayat pendidikan</strong></p>
    <p style="font-size: 16px; color: black;"><strong>S1</strong></p>
    <p style="font-size: 16px; color: black;"><strong>S2</strong></p>
    <p style="font-size: 16px; color: black;"><strong>S3</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Riwayat organisasi :</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Penghargaan :</strong></p>
    </div>
    <div  style="margin-top: 150px;">

    <div id="kemahasiswaan2">
    <h2 style="color: black;">kemahasiswaan2</h2>
    <p style="font-size: 16px; color: black;"><strong>Nama :</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Jabatan :</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Email :</strong></p>
    <p style="font-size: 24px; color: black;"><strong>Riwayat pendidikan</strong></p>
    <p style="font-size: 16px; color: black;"><strong>S1</strong></p>
    <p style="font-size: 16px; color: black;"><strong>S2</strong></p>
    <p style="font-size: 16px; color: black;"><strong>S3</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Riwayat organisasi :</strong></p>
    <p style="font-size: 16px; color: black;"><strong>Penghargaan :</strong></p>
    </div>

        <!-- JavaScript Scroll Function -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const menuCards = document.querySelectorAll('.menu-card');

                menuCards.forEach((card, index) => {
                    card.addEventListener('click', function () {
                        const targets = ['wakil-rektor', 'sub-bagian', 'sekertaris', 'kemahasiswaan1', 'kemahasiswaan2'];

                        document.getElementById(targets[index]).scrollIntoView({
                            behavior: 'smooth'
                        });
                    });
                });
            });
        </script>
       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Repeat for other sections -->

    <h3 class="text-center text-success my-5" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 32px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
        MAP INSTITUT TEKNOLOGI YOGYAKARTA
    </h3>

    <div id="map" style="width: 100%; height: 400px;"></div>
</div>
@endsection

@section('scripts')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuCards = document.querySelectorAll('.menu-card');

        menuCards.forEach((card, index) => {
            card.addEventListener('click', function () {
                const targets = ['wakil-rektor', 'sub-bagian', 'sekertaris', 'kemahasiswaan1', 'kemahasiswaan2'];
                document.getElementById(targets[index]).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        const map = L.map('map').setView([-7.799776, 110.402273], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        const marker = L.marker([-7.799776, 110.402273]).addTo(map)
            .bindPopup('<b>Institut Teknologi Yogyakarta!</b><br />I am a popup.').openPopup();

        const popup = L.popup()
            .setLatLng([-7.799776, 110.402273])
            .setContent('Institut Teknologi Yogyakarta')
            .openOn(map);

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent(`You clicked the map at ${e.latlng.toString()}`)
                .openOn(map);
        }

        map.on('click', onMapClick);
    });
</script>
@endsection