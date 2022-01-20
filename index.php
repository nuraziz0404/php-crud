<?php
include "conn.php";

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM berita";
$res = $conn->query($sql)->fetch_all();
$conn->close();
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class='m-2'>
   <a href="/create.php" class="btn btn-primary">Create new Berita</a>
</div>
<table class='table'>
   <tr scope='col' class='thead-dark table-bordered'>
      <th scope='col'>Id</th>
      <th scope='col'>Judul</th>
      <th scope='col'>Isi</th>
      <th scope='col'>Action</th>
   </tr>
   <?php
   $i = 0;
   foreach ($res as $row) {
   ?>
      <tr scope="row">
         <td><?php echo ++$i; ?></td>
         <td><?php echo $row[1]; ?></td>
         <td><?php echo $row[2]; ?></td>
         <td>
            <form action="/delete.php" method="post" enctype="application/x-www-form-urlencoded">
               <input type="hidden" name="id" value="<?php echo $row[0]; ?>">
               <a class="btn float btn-primary m-1" href="/edit.php?id=<?php echo $row[0]; ?>">Edit</a>
               <button type="submit" class="btn btn-danger m-1">Delete</button>
            </form>
         </td>
      </tr>
   <?php } ?>
</table>