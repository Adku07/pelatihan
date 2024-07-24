<?php
$database = 'pelatihan_db';
$username = 'pelatihan';
$password = 'CPt+l3y36Ic-5Ai+3I';
$server = 'localhost';

$koneksi = mysqli_connect($server, $username, $password, $database);


if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
