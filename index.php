<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>KOST ROMEO</title>
    
</head>
<body>
<?php

include 'config/koneksi.php';
require_once 'component/header.php';
require_once 'component/navbar.php';

$data = mysqli_query($koneksi, "SELECT * FROM kamar");
?>

<div id='main' class="container-fluid bg-hero min-vh-100 d-flex align-items-center justify-content-center">
<div class="container">
    <div class="row">
        <div class='col-12 col-md-6 col-lg-6 d-flex align-items-center text-white'>
            <div align=center>
                <h3 class='fw-bold'>Selamat Datang di KOST ROMEO</h3>
                <h1  class='text-white'>Pesan Langsung untuk Mendapatkan Penawaran Eksklusif dan <br> Tarif Termurah Setiap Hari Dari Situs Web Resmi Kami.</h1>
                <a href='booking.php'>
                    <button class='btn btn-primary shadow-none'>Pesan Sekarang</button>
                </a>
            </div>
        </div>
        <div class='col-12 d-md-block d-none col-md-6 col-lg-6 mt-5'>
            <img src='assets/img/hero.svg' class='img-fluid ms-5'>
        </div>
    </div>
</div>
</div>

<?php
require_once 'component/footer.php'
?>

</body>
</html>
