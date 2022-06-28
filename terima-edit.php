<?php

include 'koneksi.php';
extract($_POST);
$id=$_GET['id'];
mysqli_query($koneksi, "UPDATE buku SET judul='$judul', isbn='$isbn', tahun='$tahun', pengarang='$pengarang' WHERE id='$id'");

header('Location:index.php');

?>
