<?php

$koneksi  = mysqli_connect("localhost", "root", "", "sikamling");

function query($query)
{
    global $koneksi;

    $result = mysqli_query($koneksi, $query);
    $rows   = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// FUNCTION DAFTAR ANGGOTA
function tambahanggota($data)
{

    global $koneksi;

    $nama   = htmlspecialchars($data["nama"]);
    $rt     = htmlspecialchars($data["rt"]);
    $rw     = htmlspecialchars($data["rw"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query  = "INSERT INTO daftar VALUES
            ('','$nama', '$rt', '$rw', '$alamat')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function editanggota($data)
{

    global $koneksi;

    $id = $data["id"];
    $nama   = htmlspecialchars($data["nama"]);
    $rt     = htmlspecialchars($data["rt"]);
    $rw     = htmlspecialchars($data["rw"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query  = " UPDATE daftar SET
                nama    = '$nama',
                rt      = '$rt',
                rw      = '$rw',
                alamat  = '$alamat'
              WHERE id= $id";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}


function hapus($id)
{

    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM daftar WHERE id= $id");

    return mysqli_affected_rows($koneksi);
}

// FUNCTION JADWAL ANGGOTA

function tambahjadwal($data)
{

    global $koneksi;

    $nama       = htmlspecialchars($data["nama"]);
    $rt         = htmlspecialchars($data["rt"]);
    $rw         = htmlspecialchars($data["rw"]);
    $hari       = htmlspecialchars($data["hari"]);
    $tanggal    = htmlspecialchars($data["tanggal"]);
    $waktu      = htmlspecialchars($data["waktu"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    $query = "INSERT INTO jadwal VALUES
             ('', '$nama', '$rt', '$rw', '$hari', '$tanggal', '$waktu', '$keterangan')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function ubahjadwal($data)
{

    global $koneksi;
    $id = $data["id"];

    $nama       = htmlspecialchars($data["nama"]);
    $rt         = htmlspecialchars($data["rt"]);
    $rw         = htmlspecialchars($data["rw"]);
    $hari       = htmlspecialchars($data["hari"]);
    $tanggal    = htmlspecialchars($data["tanggal"]);
    $waktu      = htmlspecialchars($data["waktu"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    $query = "UPDATE jadwal SET
             nama           = '$nama',
             rt             = '$rt',
             rw             = '$rw',
             hari           = '$hari',
             tanggal        = '$tanggal',
             waktu          = '$waktu',
             keterangan     = '$keterangan'
             WHERE  id= $id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}



function delete($id)
{

    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM jadwal WHERE id= $id");

    return mysqli_affected_rows($koneksi);
}
