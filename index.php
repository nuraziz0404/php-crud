<?php
include "conn.php";

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM berita";
$res = $conn->query($sql)->fetch_all();
$conn->close();

echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">';
echo "<div class='m-2'>";
echo '<a href="/create.php" class="btn btn-primary"  >Create new Berita</a>';
echo "</div>";
echo "<table class='table'>
  <tr scope='col' class='thead-dark table-bordered'>
    <th scope='col'>Id</th>
    <th scope='col'>Judul</th>
    <th scope='col'>Isi</th>
    <th scope='col'>Action</th>
  </tr>
";
$i = 0;
foreach($res as $row){
echo '<tr scope="row">';
echo '<td>'.++$i.'</td>';
echo '<td>'.$row[1].'</td>';
echo '<td>'.$row[2].'</td>';
echo '<td><form action="/delete.php" method="post" enctype="application/x-www-form-urlencoded"><input type="hidden" name="id" value="'.$row[0].'"><a class="btn float btn-primary m-1" href="/edit.php?id='.$row[0].'">Edit</a><button type="submit" class="btn btn-danger m-1">Delete</button></form></td>';
echo '</tr>';
}
echo '</table>';