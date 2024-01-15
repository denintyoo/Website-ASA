<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 15px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .ms-auto {
            margin-left: auto;
        }

        nav a {
            text-decoration: none;
            color: #333;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>

    <nav class='bg-white shadow-sm p-3 position-fixed fixed-top'>
        <div class='d-flex container align-items-center'>
            <div class='ms-auto'>
                <a href='index.php'>Home</a>
                <a href='kamar.php'>Kamar</a>
                <a href='fasilitas.php'>Fasilitas</a>
            </div>
        </div>
    </nav>

    <!-- Konten halaman web Anda -->
    <div style="margin-top: 80px;">
        <!-- Isi halaman web Anda akan berada di sini -->
        <!-- Pastikan Anda memberikan margin-top setidaknya setara dengan tinggi navbar -->
    </div>

</body>
</html>
