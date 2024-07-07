<?php

include 'proses.php';

$id = $_GET["id"];

if (delete($id) > 0) {
    echo "
    <script>
    alert(' Berhasil Dihapus');
    document.location.href = 'kegiatan.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert(' Gagal Dihapus');
    document.location.href = 'kegiatan.php';
    </script>
    ";
}
