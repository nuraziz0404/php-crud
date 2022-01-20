<?php

include "conn.php";
include "blade.php";

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

try {
   $stmt = $conn->prepare("select * from berita where id = ?");
   $stmt->bind_param("i", $id);
   $stmt->execute();
   $res = $stmt->get_result()->fetch_all()[0];
   echo $blade->make('edit', ['res' => $res])->render();
} catch (PDOException $e) {
   echo "Error: " . $e->getMessage();
}
