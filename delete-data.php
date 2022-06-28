<?php

include 'koneksi.php';
extract($_POST);
$id=$_GET['target'];
mysqli_query($koneksi, "DELETE FROM buku WHERE id=$id");

header('Location:index.php');

?>
