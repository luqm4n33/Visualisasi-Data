<?php

include 'proses.php';

if (isset($_POST["submit"])) {

    if (tambahjadwal($_POST) > 0) {

        echo "
            <script>
            alert('Berhasil Didaftarkan')
            document.location.href = 'kegiatan.php';
            </script>
             ";
    } else {
        echo "
        <script>
        alert('Gagal Didaftarkan')
        document.location.href = 'kegiatan.php';
        </script>
         ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--<meta http-equiv="X-UA-compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadwal Kegiatan</title>
    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--CSS-->
    <link href="../sikamling/css/style.css" rel="stylesheet">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freeman&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <!-- NAVBAR -->
    <nav>
        <div class="brand">
            <h2>Sijadkamling</h2>
        </div>
        <ul class="menu-nav">
            <li class="nav-links"><a class="active" href="Home.php">HOME</a></li>
            <li class="nav-links"><a href="Registrasi.php">REGISTRASI</a></li>
            <li class="nav-links"><a href="Keanggotaan.php">KEANGGOTAAN</a></li>
            <li class="nav-links"><a href="kegiatan.php">JADWAL</a></li>
        </ul>
        <div class="hamburger-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
    <!-- END -->
    <!-- FORM JADWAL DAN WAKTU -->
    <div class="card mx-auto m-5 p-2" style="width: 500px">
        <div class="card-header">
            REGISTRASI JADWAL KEAMANAN KELILING
        </div>
        <div class="card-body">

            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" required class="form-control">
                </div>
                <div class="mb-3">
                    <label for="rt">RT</label>
                    <select name="rt" id="rt" required class="form-select">
                        <option>-Pilih RT-</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="rw">RW</label>
                    <select name="rw" id="rw" required class="form-select">
                        <option>-Pilih RW-</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="hari">Hari</label>
                    <select name="hari" id="hari" required class="form-select">
                        <option>-Pilih Hari-</option>
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
                        <option value="kamis">Kamis</option>
                        <option value="jumat">Jumat</option>
                        <option value="sabtu">Sabtu</option>
                        <option value="minggu">Minggu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" required class="form-control">
                </div>
                <div class="mb-3">
                    <label for="waktu">Waktu</label>
                    <input type="text" id="waktu" name="waktu" required class="form-control">
                </div>
                <div class="mb-3">
                    <label for="keterangan">Keterangan</label>
                    <input type="keterangan" id="keterangan" name="keterangan" required class="form-control">
                </div>
                <div>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-danger" href="Registrasi.php" role="button">Keluar</a>
                </div>
            </form>
        </div>
    </div>
    <!-- END -->

    <!-- JAVA SCRIPT -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="../sikamling/js/script.js"></script>
    <!-- END -->
</body>

</html>