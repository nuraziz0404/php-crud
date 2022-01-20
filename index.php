<?php
include "blade.php";
include "conn.php";

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM berita";
$res = $conn->query($sql)->fetch_all();
$conn->close();

echo $blade->make('index', ['res' => $res, 'i'=> 0 ])->render();
