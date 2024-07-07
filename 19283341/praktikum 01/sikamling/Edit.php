<?php

require 'proses.php';

$id = $_GET["id"];

$daftar = query("SELECT * FROM daftar WHERE id = $id")[0];



if (isset($_POST["simpan"])) {

    if (editanggota($_POST) > 0) {

        echo "
        <script>
        alert('Berhasil Diedit')
        document.location.href = 'Keanggotaan.php';
        </script>
         ";
    } else {
        echo "
    <script>
    alert('Gagal Diedit')
    document.location.href = 'Keanggotaan.php';
    </script>
     ";
    }
}

?>

<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <!--<meta http-equiv="X-UA-compatible" content="IE=edge">-->
        <!--meta name="viewport" content="width=device-width, initial-scale=1"-->
        <title>Edit Anggota</title>
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

        <!-- FORM EDIT DATA KEANGGOTAAN -->
        <div class="card mx-auto m-5 p-2" style="width: 500px">
            <div class="card-header">
                HALAMAN EDIT ANGGOTA KEAMANAN KELILING
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $daftar["id"]; ?>">
                    <div class="mb-3">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" value="<?= $daftar["nama"]; ?>" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="rt">RT</label>
                        <input type="text" id="rt" name="rt" value="<?= $daftar["rt"] ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="rw">RW</label>
                        <input type="text" id="rw" name="rw" value="<?= $daftar["rw"] ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $daftar["alamat"]; ?>" required rows="3"></textarea>
                    </div>
                    <div>
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-danger" href="Keanggotaan.php" role="button">Keluar</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- JAVA SCRIPT -->
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

        <script src="../sikamling/js/script.js"></script>
        <!-- END -->
    </body>

    </html>