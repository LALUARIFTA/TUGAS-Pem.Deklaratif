<?php
include('connection.php');

$sql = "SELECT * FROM mahasiswa";

$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_object($query)) {
        $data['status'] = 200;
        $data['result'][] = $row;
    }
} else {
    $data['status'] = 400;
    $data['result'][] = "Data not Found";
}

print_r(json_encode($data));
