<?php
include "conn.php";

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$judul = $_POST['judul'];
$isi = $_POST['isi'];

$stmt = $conn->prepare("insert into berita (judul, isi) values (?, ?)");
$stmt->bind_param("ss", $judul, $isi);
$stmt->execute();
$stmt->close();
$conn->close();
header("location: index.php");