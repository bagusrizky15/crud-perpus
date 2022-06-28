<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "perpustakaan";

$koneksi = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
    # code...
    echo "Koneksi Gagal";

}else {
}

?>