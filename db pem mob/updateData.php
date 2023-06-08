<?php

include('connection.php');

$nama       = $_POST['nama']; //menangkap nama dari post
$nim    = $_POST['nim']; //menangkap nim dari post
$alamat     = $_POST['alamat']; //menangkap alamat dari post
$prodi       = $_POST['prodi']; //menangkap prodi dari post

if (!empty($nama) || !empty($nim)) {

    $sql = "UPDATE mahasiswa set nama='$nama', alamat='$alamat', prodi='$prodi' WHERE nim='$nim' ";

    $query = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        $data['status'] = true;
        $data['result'] = "Berhasil";
    } else {
        $data['status'] = false;
        $data['result'] = "Gagal";
    }
} else {
    $data['status'] = false;
    $data['result'] = "Gagal, Nim dan Nama tidak boleh kosong!";
}


print_r(json_encode($data));
