<?php
// $hostname = '127.0.0.1';
$servername = "localhost";
$username = 'root';
$password = '';
$database = 'kampus';
// $port = '8889';

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}
echo "Connected Succesfull";
