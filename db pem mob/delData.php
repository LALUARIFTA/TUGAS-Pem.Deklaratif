<?php

include('connection.php');

$nim = $_POST['nim'];

if (!empty($nim)) {
    $sql = "DELETE FROM mahasiswa WHERE nim='$nim' ";

    $query = mysqli_query($conn, $sql);

    $data['status'] = true;
    $data['result'] = 'Berhasil';
} else {
    $data['status'] = false;
    $data['result'] = 'Gagal';
}

print_r(json_encode($data));
