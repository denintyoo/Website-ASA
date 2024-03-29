<?php
    error_reporting(0);
    include 'config/koneksi.php';
    
    require_once 'component/header.php';
    require_once 'component/navbar.php';
    $tglcheckin = isset($_POST['tglcheckin']);
    $tglcheckout = isset($_POST['tglcheckout']);
    $totalkamar = isset($_POST['totalkamar']);
?>

<style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 600px;
            margin: 20px auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<div class="container-fluid min-vh-100 bg-silver mt-5 py-5">
    <div class="row">
        <div class='col-12 col-md-2 col-lg-2'></div>
        <div class='col-12 col-md-8 col-lg-8'>
            <div class='bg-white p-3 rounded'>
                <h4 align=center>Form Pemesanan Kamar</h4>
                <hr>
                <form action="api/cetak-reservasi.php" method='POST'>
                    <div>
                    <label class='mb-2'>Nama:</label>
                    <input required class='form-control shadow-none mb-3' name='nmpelanggan'>
                    </div>
                    <div>
                    <label class='mb-2'>Email:</label>
                    <input required class='form-control shadow-none mb-3' type='email' name='emailpelanggan'>
                    </div>
                    <div>
                    <label class='mb-2'>No. Handphone:</label>
                    <input required class='form-control shadow-none mb-3' type='number' name='nohppelanggan'>
                    </div>
                    <div>
                    <label class='mb-2'>Tanggal Check In:</label>
                    <input required value='<?php echo $tglcheckin ? $_POST['tglcheckin'] : ''?>' class='form-control shadow-none mb-3' name='tglcheckin' type='date'>
                    </div>
                    <div>
                    <label class='mb-2'>Tanggal Check Out:</label>
                    <input required value='<?php echo $tglcheckout ? $_POST['tglcheckout'] : ''?>' class='form-control shadow-none mb-3' name='tglcheckout' type='date'>
                    </div>
                    <div>
                    <label class='mb-2'>Total Kamar:</label>
                    <input required value='<?php echo $totalkamar ? $_POST['totalkamar'] : ''?>' class='form-control shadow-none mb-3' name='totalkamar' type='number'>
                    </div>
                    <div>
                    <label class='mb-2'>Tipe Kamar:</label>
                    <select name="tipekamar" class='form-select mb-3'>
                    </div>
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM kamar");
                        while($r = mysqli_fetch_array($sql)) {
                    ?>
                        <option <?php echo $_GET['tipe'] = $r['tipekamar'] ? 'selected' : ''?> value="<?php echo $r['tipekamar'] ?>"><?php echo $r['tipekamar'] ?> (Rp <?php echo $r['biayasewa'] ?> / hari)</option>
                    <?php
                        }
                    ?>
                    </select>

                    <button type='submit' class='btn btn-success shadow-none'>Konfirmasi Pesanan</button>
                </form>
            </div>
        </div>
        <div class='col-12 col-md-2 col-lg-2'></div>
    </div>
</div>

<?php
    require_once 'component/footer.php';
?>