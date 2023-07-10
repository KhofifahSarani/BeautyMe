<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "beautyme"; //nama databsenya

    // Membuat koneksi ke database
    $koneksi = mysqli_connect($host, $username, $password, $database);

    // Memeriksa koneksi
    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>