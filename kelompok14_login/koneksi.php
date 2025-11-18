<?php
$koneksi = mysqli_connect("localhost", "root", "", "kelompok14_login");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
