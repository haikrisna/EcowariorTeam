<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Transaksi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style /riwayatvendor.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <div class="logo p-3">
                        <img src="logo.png" alt="EcoTrade" class="img-fluid">
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <div class="dashboard1"><a href="{{ route('dashboardvendor') }}" >Dashboard</a></div>
                        </li>
                        <li class="nav-item">
                            <div class="pesanan1"><a href="{{ route('pesananmasuk') }}" >Pesanan</a></div>
                        </li>
                        <li class="nav-item">
                            <div class="statistik"> <a href="{{ route('statistikvendor') }}" >Statistik</a></div>
                        </li>
                        <li class="nav-item">
                            <div class="dompet"><a href="{{ route('dompetvendor') }}" >Dompet</a></div>
                        </li>
                    </ul>
                    <div class="mt-4">
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Preferences</span>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Settings</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav flex-column mt-5">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Log Out</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Riwayat Transaksi</h1>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Locations</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>ID Pemesan</th>
                                <th>Pembayaran</th>
                                <th>Jenis Limbah</th>
                                <th>Nominal Transaksi</th>
                                <th>Nama Pemesan</th>
                                <th>Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Semarang</td>
                                <td>1 Juni 2024</td>
                                <td>08.00</td>
                                <td>12345678</td>
                                <td>GoPay</td>
                                <td>Limbah Resto</td>
                                <td>Rp100.000</td>
                                <td>Arya</td>
                                <td>4.8</td>
                            </tr>
                            <tr>
                                <td>Semarang</td>
                                <td>1 Juni 2024</td>
                                <td>08.00</td>
                                <td>12345678</td>
                                <td>GoPay</td>
                                <td>Limbah Resto</td>
                                <td>Rp100.000</td>
                                <td>Arya</td>
                                <td>4.8</td>
                            </tr>
                            <tr>
                                <td>Semarang</td>
                                <td>1 Juni 2024</td>
                                <td>08.00</td>
                                <td>12345678</td>
                                <td>GoPay</td>
                                <td>Limbah Resto</td>
                                <td>Rp100.000</td>
                                <td>Arya</td>
                                <td>4.8</td>
                            </tr>
                            <!-- Repeat the rows as needed -->
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
