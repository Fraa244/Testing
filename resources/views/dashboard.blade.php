<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - CommuterLink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --logo-red: #D32F2F;
            --logo-navy: #0A2342;
            --apple-grey: #F5F5F7;
            --charcoal: #1D1D1F;
        }

        body {
            background-color: var(--apple-grey);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto;
        }

        .navbar {
            background-color: white;
            border-bottom: 1px solid #eee;
        }

        .card-dashboard {
            border: none;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        .btn-red {
            background-color: var(--logo-red);
            color: white;
            border: none;
        }

        .btn-red:hover {
            background-color: #b02727;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg px-4 py-3">
    <div class="container-fluid">
        <span class="fw-bold" style="color: var(--logo-navy); font-size: 1.5rem;">
            CommuterLink<span style="color: var(--logo-red);">.</span>
        </span>

        <div class="ms-auto d-flex align-items-center gap-3">
            <span class="fw-medium">
                👋 Halo, {{ Auth::user()->name }}
            </span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-red btn-sm">Logout</button>
            </form>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-5">

    <div class="row mb-4">
        <div class="col">
            <h3 class="fw-bold">Dashboard</h3>
            <p class="text-muted">Selamat datang di sistem Lost & Found</p>
        </div>
    </div>

    <div class="row g-4">

        <!-- CARD 1 -->
        <div class="col-md-4">
            <div class="card card-dashboard p-4">
                <h5 class="fw-bold">Barang Hilang</h5>
                <p class="text-muted">Laporkan barang yang hilang</p>
                <button class="btn btn-red w-100">Laporkan</button>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4">
            <div class="card card-dashboard p-4">
                <h5 class="fw-bold">Barang Ditemukan</h5>
                <p class="text-muted">Upload barang yang ditemukan</p>
                <button class="btn btn-dark w-100">Upload</button>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">
            <div class="card card-dashboard p-4">
                <h5 class="fw-bold">Riwayat</h5>
                <p class="text-muted">Lihat aktivitas kamu</p>
                <button class="btn btn-secondary w-100">Lihat</button>
            </div>
        </div>

    </div>

</div>

</body>
</html>