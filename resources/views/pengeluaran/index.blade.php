<!-- resources/views/pengeluaran/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rincian Pengeluaran</title>
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
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Data</a></li>
                <li><a href="#">Pembayaran Siswa</a></li>
                <li><a href="#">Keuangan</a></li>
                <li><a href="#">Pemasukan & Pengeluaran</a>
                    <ul>
                        <li><a href="#">Pemasukan</a></li>
                        <li><a href="#">Pengeluaran</a></li>
                    </ul>
                </li>
                <li><a href="#">Laporan</a></li>
                <li><a href="#">Informasi</a></li>
                <li><a href="#">Pengguna</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Rincian Pengeluaran</h1>
            <button class="btn-tambah">+ Tambah</button>
            <div class="filter">
                <input type="text" placeholder="Keterangan Pengeluaran">
                <button>Cari</button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Pengeluaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengeluaran as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item['tanggal'] }}</td>
                        <td>{{ $item['keterangan'] }}</td>
                        <td>Rp. {{ number_format($item['jumlah'], 0, ',', '.') }}</td>
                        <td><button>Edit</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>