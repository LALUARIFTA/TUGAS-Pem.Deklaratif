<?php
include('connection.php');

$nama= $_POST['nama']; //menangkap nama dari post
$nim= $_POST['nim']; //menangkap nim dari post
$alamat= $_POST['alamat']; //menangkap alamat dari post
$password= $_POST['password'];
$prodi= $_POST['prodi']; //menangkap prodi dari post

if (!empty($nim) || !empty($nim)) {

    $sqlCheck = "SELECT COUNT(*) FROM mahasiswa WHERE nim='$nim' AND nama='$nim'";
    $queryCheck = mysqli_query($conn, $sqlCheck);
    $hasilCheck = mysqli_fetch_array($queryCheck);
    if ($hasilCheck[0] == 0) {
        $sql = "INSERT INTO mahasiswa (nim,nama,alamat,password,prodi) VALUES('$nim','$nama','$alamat','$password','$prodi')";

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
        $data['result'] = "Gagal, Data Sudah Ada";
    }
} else {
    $data['status'] = false;
    $data['result'] = "Gagal, Nomor Induk dan Nama tidak boleh kosong!";
}


print_r(json_encode($data));
