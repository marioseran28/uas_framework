<?php
$host = "localhost";
$user = "root";
$pass = "root";
$name = "data_siswa_uascrud";

$koneksi = mysqli_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih!");
