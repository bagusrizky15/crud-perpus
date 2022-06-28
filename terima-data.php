<?php

include 'koneksi.php';
extract($_POST);
mysqli_query($koneksi, "INSERT INTO buku (judul, isbn, tahun, pengarang)
VALUES ('$judul', '$isbn', '$tahun', '$pengarang')");

header('Location:index.php');

?>
