<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-color: #f0f0f0;
        }

        .sidebar {
            width: 250px;
            background-color: #f8f9fa;
            padding: 20px;
            position: fixed;
            height: 100%;
        }

        .content {
            margin-left: 270px;
            padding: 20px;
        }

        .card {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: inline-block;
            width: 200px;
            text-align: center;
        }

        .card-green {
            border-color: #28a745;
        }

        .card-orange {
            border-color: #fd7e14;
        }

        .card-blue {
            border-color: #007bff;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="profile">
            <img src="path_to_profile_image" alt="Profile Image" style="border-radius: 50%; width: 50px;">
            <p>M. Rifqi</p>
            <span>Online</span>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Data</a></li>
                <li><a href="#">Pembayaran Siswa</a></li>
                <li><a href="#">Keuangan</a></li>
                <li><a href="#">Pemasukan & Pengeluaran</a></li>
                <li><a href="#">Laporan</a></li>
                <li><a href="#">Informasi</a></li>
                <li><a href="#">Pengguna</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <h1>Dashboard</h1>
        <div class="card card-green">
            <h2>Pemasukan</h2>
            <p>Rp. 0</p>
        </div>
        <div class="card card-orange">
            <h2>Pengeluaran</h2>
            <p>Rp. 0</p>
        </div>
        <div class="card card-blue">
            <h2>Total</h2>
            <p>Rp. 0</p>
        </div>
    </div>
</body>

</html>