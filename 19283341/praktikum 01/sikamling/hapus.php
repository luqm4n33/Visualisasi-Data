<?php

include 'proses.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
    <script>
    alert(' Berhasil Dihapus');
    document.location.href = 'Keanggotaan.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert(' Gagal Dihapus');
    document.location.href = 'Keanggotaan.php';
    </script>
    ";
}
