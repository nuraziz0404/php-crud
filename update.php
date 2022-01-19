<?php
include "conn.php";

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];

$stmt = $conn->prepare("update berita set judul=?, isi=? where id=?");
$stmt->bind_param("sss", $judul, $isi, $id);
$stmt->execute();
$stmt->close();
$conn->close();
header("location: index.php");