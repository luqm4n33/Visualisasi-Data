<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sikamling</title>
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

    <!--  SECTION HERO -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="text">
                        <h1 class="text-home-bold fw-bold text-dark mt-1">Selamat Datang Di Website SIJADKAMLING</h1>
                        <h3 text-home-reguler fw-normal text-secondary>Sistem Informasi Jadwal Keamanan Keliling</h3>
                        <p badge fs-6 fw-normal bg-primary-light text-primary>Sijadkamling merupakan sebuah aplikasi yang dikhususkan untuk memanajemen informasi terkait jadwal dan waktu dalam kegiatan ronda keliling yang diadakan oleh masyarakat.</p>
                        <a href="Daftar.php" type="button" class="btn btn-success btn-lg">Registrasi Anggota</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="img">
                        <img src="../sikamling/img/patrol_post.png" class="w-100" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- JAVA SCRIPT -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="../sikamling/js/script.js"></script>
    <!-- END -->
</body>

</html>