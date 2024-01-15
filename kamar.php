<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>KOST ROMEO</title>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #fasilitas {
            padding-top: 60px; /* Menyesuaikan tinggi navbar */
        }

        .container-fluid {
            padding-top: 50px;
        }

        .mb-5 {
            margin-bottom: 30px;
        }

        h3 {
            font-weight: bold;
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .col-12 {
            flex: 0 0 calc(100% - 20px);
            max-width: calc(100% - 20px);
        }

        .col-md-6 {
            flex: 0 0 calc(50% - 20px);
            max-width: calc(50% - 20px);
        }

        .col-lg-3 {
            flex: 0 0 calc(25% - 20px);
            max-width: calc(25% - 20px);
        }

        .card {
            border: none;
            transition: transform 0.2s;
            border-radius: 10px;
            overflow: hidden;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top img {
            width: 100%;
            height: auto;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            background-color: #ffffff;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            text-align: center;
            padding: 15px;
        }

        .card-body h4 {
            margin: 0;
            font-style: italic;
        }
    </style>
    
</head>
<body>
    <?php
    include 'config/koneksi.php';
    require_once 'component/header.php';
    require_once 'component/navbar.php';

    $data = mysqli_query($koneksi, "SELECT * FROM kamar");
    ?>

    <div id='kamar' class='mb-5'></div>
    <div class="container-fluid bg-silver pt-5">
        <div class="container">

            <div class='row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4'>
                <?php
                while ($r = mysqli_fetch_array($data)) {
                ?>
                    <div class='col mb-4'>
                        <div class="card h-100 rounded shadow">
                            <div class='card-img-top'>
                                <img class='img-fluid img-kamar' src='assets/img/kamar/<?php echo $r['thumb'] ?>' alt='Kamar <?php echo $r['tipekamar'] ?>'>
                            </div>
                            <div class="card-body p-3">
                                <h4 class='mb-3'>Kamar <i><?php echo $r['tipekamar'] ?></i></h4>
                                <p class='mb-2'>Rp <?php echo number_format($r['biayasewa'], '0', ',', '.'); ?> / Bulan</p>
                                <ul class='list-unstyled mb-2'>
                                    <?php
                                    $fasilitas = explode("\n", $r['fasilitas']);
                                    foreach ($fasilitas as $info) {
                                    ?>
                                        <li><?php echo $info ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class='card-footer bg-white text-center'>
                                <a href='booking.php?tipe=<?php echo $r['tipekamar'] ?>' class='h6'>
                                    <button class='btn btn-outline-primary rounded-pill shadow-none'>Pesan Kamar</button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    require_once 'component/footer.php'
    ?>

</body>
</html>
