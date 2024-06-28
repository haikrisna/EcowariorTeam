<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Deskripsi singkat tentang halaman web.">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus Jakarta Sans:wght@700&display=swap" />
    <link rel="stylesheet" href="style/styles.css">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/icon/NavBar/logo.svg" alt="Logo" style="width: 200px; height: 63.31px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-custom">
                    <div class="search-container">
                        <form class="d-flex align-items-center">
                            <input class="form-control me-2" type="search" placeholder="Search something here" aria-label="Search">
                            <button class="btn filter-btn" aria-label="Filter">
                                <img src="img/filter.png" alt="Filter">
                            </button>
                        </form>
                    </div>
                    <div class="notification-container">
                        <a href="#" style="display: inline-block;">
                            <img src="img/notification.png" alt="Notifikasi" style="width: 45px; height: 45px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-container">
        <div class="m-a-i">MAIN MENU</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <img src="img/home.png" alt="Dashboard" style="width: 20px; height: 20px; margin-right: 10px;">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pesanan-link" href="#">
                    <img src="img/pesanan.png" alt="Pesanan" style="width: 20px; height: 20px; margin-right: 10px;">
                    Pesanan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="img/statistik.png" alt="Statistik" style="width: 20px; height: 20px; margin-right: 10px;">
                    Statistik
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="img/wallet.png" alt="Dompet" style="width: 20px; height: 20px; margin-right: 10px;">
                    Dompet
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="img/calendar.png" alt="Riwayat Transaksi" style="width: 20px; height: 20px; margin-right: 10px;">
                    Riwayat Transaksi
                </a>
            </li>
            <div class="p-r-e">P R E F E R E N C E S</div>
            <li class="nav-item pengaturan">
                <a class="nav-link" href="#">
                    <img src="img/setting.png" alt="Pengaturan" style="width: 20px; height: 20px; margin-right: 10px;">
                    Pengaturan
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

     <!-- isi content -->

     <div class="container">
        <div class="rectangle-div"></div>
        <div class="container-flex">
            <a href="#" class="permintaan-pesanan">Permintaan Pesanan</a>
            <a href="#" class="dalam-proses">Dalam Proses</a>
            <a href="#" class="ditolak">Ditolak</a>
            <a href="#" class="beri-ulasan">Beri Ulasan</a>
        </div>
        <div class="line-div"></div>
        <!-- Rectangle baru di bawah line dengan ukuran kustom dan corner radius pada semua sisi -->
        <div class="rectangle-div custom-rectangle">
            <img src="assets/icon/main/icon gmaps.svg" alt="Icon GMaps" class="icon-gmaps">
            <img src="assets/icon/main/logo jaya abadi.svg" alt="Logo Jaya Abadi" class="logo-jaya-abadi">
            <b class="pt-jaya-abadi">PT. Jaya Abadi</b>
            <img src="assets/icon/main/Maps.svg" alt="Maps Icon" class="maps-icon">
            <div class="open-on-text">Open On</div>
            <div class="menu-container">
                <div class="menu-item">Jenis Limbah     : <span>Kotoran Ternak</span></div>
                <div class="menu-item">Alamat           : <span>Jl. Gajah Raya no 7</span></div>
                <div class="menu-item">Waktu Pick Up    : <span>10:00 WIB</span></div>
                <div class="menu-item">Keterangan       : <span>Kotoran Kambing</span></div>
                <div class="menu-item">Biaya            : <span>Rp100.000</span></div>
                <div class="menu-item">Metode Pembayaran: <span>Shopeepay</span></div>
            </div>
            <img src="img/Star.png" alt="Star Icon" class="star-icon">
            <!-- Rectangle baru -->
            <div class="new-rectangle">
                Dalam Perjalanan
            </div>
            <!-- Rectangle baru -->
            <div class="new-inner-rectangle">
                <div class="kirim-pesan">Kirim Pesan</div>
            </div>
            <!-- Tambahkan ini di dalam div .rectangle-div di HTML Anda -->
            <img src="img/shopeepay.png" alt="Shopee Icon" class="shopee-icon">
        </div>
        <div class="div">4.7</div>
     </div>
    <!-- isi content -->


</html>
