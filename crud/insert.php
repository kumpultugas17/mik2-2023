<?php
$conn = mysqli_connect('localhost', 'root', '', 'mik2_db_mhs');

$nim = $_POST['nim'];
$nama = $_POST['n'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];

$conn->query("INSERT INTO mahasiswa (nim, nama, alamat, telepon, email) VALUES ('$nim', '$nama', '$alamat', '$telepon', '$email')");

header('location:index.php');