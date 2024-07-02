<!-- resources/views/pembayaran-siswa/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Siswa</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <img src="{{ asset('images/profile.png') }}" alt="Profile Image">
                <p>M. Rifqi</p>
                <span>Online</span>
            </div>
            <ul class="menu">
                <li><a href="dashboard">Dashboard</a></li>
                <li><a href="/tahunajaran">Data</a></li>
                <li><a href="/pembayaran-siswa">Pembayaran Siswa</a></li>
                <li><a href="#">Keuangan</a></li>
                <li><a href="#">Pemasukan & Pengeluaran</a></li>
                <li><a href="#">Laporan</a></li>
                <li><a href="#">Informasi</a></li>
                <li><a href="#">Pengguna</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Pembayaran Siswa</h1>
            <div class="filter">
                <label for="tahun-ajaran">Tahun Ajaran</label>
                <select id="tahun-ajaran" name="tahun-ajaran">
                    <option value="">Pilih Tahun Ajaran</option>
                    <!-- Tambahkan opsi tahun ajaran di sini -->
                </select>
                <label for="nis-siswa">NIS Siswa</label>
                <input type="text" id="nis-siswa" name="nis-siswa">
                <button>Cari</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>