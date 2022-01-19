<?php
include "conn.php";

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];

$stmt = $conn->prepare("delete from berita where id=?");
$stmt->bind_param("s", $id);
$stmt->execute();
$stmt->close();
$conn->close();
header("location: index.php");