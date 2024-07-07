<?php

include 'proses.php';

$daftar = mysqli_query($koneksi, "SELECT * FROM daftar");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <!--meta name="viewport" content="width=device-width, initial-scale=1"-->
    <title>Keanggotaan</title>
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
            <li class="nav-links"><a href="Home.php">HOME</a></li>
            <li class="nav-links"><a href="Registrasi.php">REGISTRASI</a></li>
            <li class="nav-links"><a class="active" href="Keanggotaan.php">KEANGGOTAAN</a></li>
            <li class="nav-links"><a href="kegiatan.php">JADWAL</a></li>
        </ul>
        <div class="hamburger-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
    <!-- END -->
    <!-- SECTION INFORMATION ANGGOTA -->
    <div class="card m-5 p-3 mx-6">
        <div class="card-header">
            <div class="card-header text-white bg-secondary">
                <h6>Data Anggota SIJADKAMLING</h6>
            </div>
        </div>
        <div class="card-body">
            <table class="table tabble-responsive table-bordered ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">RT</th>
                        <th scope="col">RW</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>
                    <?php
                    foreach ($daftar as $row) : ?>

                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                <?= $row["nama"]; ?>
                            </td>
                            <td>
                                <?= $row["rt"]; ?>
                            </td>
                            <td>
                                <?= $row["rw"]; ?>
                            </td>
                            <td>
                                <?= $row["alamat"]; ?>
                            </td>
                            <td>
                                <a href="Edit.php?id=<?= $row["id"]; ?>" class="btn btn-success"><i class="ri-delete-bin-6-line"></i>Edit</a>
                                <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-danger"><i class="ri-delete-bin-6-line"></i>Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
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