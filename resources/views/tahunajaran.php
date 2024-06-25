<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tahun ajaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            background-color: #f8f9fa;
        }

        .sidebar {
            width: 250px;
            background-color: #f0f0f0;
            padding: 20px;
            position: fixed;
            height: 100%;
        }

        .main-content {
            margin-left: 270px;
            padding: 20px;
            flex-grow: 1;
        }

        .top-bar {
            background-color: #87CEEB;
            padding: 10px;
            color: #fff;
        }

        .top-bar .user-info {
            display: flex;
            align-items: center;
        }

        .top-bar .user-info img {
            border-radius: 50%;
            margin-right: 10px;
        }

        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .table-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="user-info">
            <img src="https://via.placeholder.com/50" alt="User Image">
            <div>
                <h5>M. Rifqi</h5>
                <span>Online</span>
            </div>
        </div>
        <nav class="mt-4">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tahun Ajaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Keuangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pembayaran Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Laporan</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="main-content">
        <div class="top-bar">
            <h1>Tahun Ajaran</h1>
        </div>
        <div class="content-header">
            <button class="btn btn-primary">+ Tambah</button>
            <div>
                <input type="text" class="form-control" placeholder="Cari Tahun Ajaran">
            </div>
        </div>
        <div class="table-container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tahun Pelajaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tahunAjaran as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->tahun_pelajaran }}</td>
                        <td><span class="badge bg-success">{{ $item->status }}</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>