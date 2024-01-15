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

    <div id='fasilitas' class="container-fluid bg-silver pt-5">
        <div class="container">
            <div class='row'>
                <?php
                    $no = 1;
                    $fasilitas = mysqli_query($koneksi, "SELECT * FROM fasilitas");
                    while($f = mysqli_fetch_array($fasilitas)) {
                ?>
                <div class='col-12 col-md-6 col-lg-3'>
                    <div class="card h-100 rounded shadow">
                        <div class='card-img-top rounded'>
                            <img src='assets/img/fasilitas/<?php echo $f['thumb'] ?>' alt='Fasilitas Image'>
                        </div>
                        <div class="card-body p-0">
                            <h4><?php echo $f['nmfasilitas'] ?></h4>
                        </div>
                    </div>
                </div>
                <?php
                    $no++;
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
