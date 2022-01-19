<?php

include "conn.php";

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
 
   echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">';
   echo "<h1>Edit data</h1>";
   echo "<form action='/update.php' method='post' enctype='application/x-www-form-urlencoded'>";
   echo "<div class='form-group'>";
   echo "<input type='hidden' id='id' name='id' value='".$res[0]."'>";
   echo "<label for='judul'>Judul</label>";
   echo "<input type='text' class='form-control' id='judul' name='judul' value='".$res[1]."'>";
   echo "</div>";
   echo "<div class='form-group'>";
   echo "<label for='isi'>Isi</label>";
   echo "<input type='text' class='form-control' id='isi' name='isi' value='".$res[2]."'>";
   echo "</div>";
   echo "<button type='submit' class='btn btn-primary'>Submit</button>";
   echo "</form>";
 }
 catch(PDOException $e) {
   echo "Error: " . $e->getMessage();
 }
 $conn = null;

