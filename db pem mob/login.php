<?php

include('connection.php');


$nim    = $_POST['nim']; //menangkap nim dari post
$password    = $_POST['password']; //menangkap nim dari post


if (!empty($nim) || !empty($password)) {

    $sql = "SELECT * FROM mahasiswa WHERE nim='$nim' AND password='$password' ";

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