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
?>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <div class='container'>
      <div class='m-2'>
         <a href='/' class='btn btn-primary float float-right'>Back</a>
         <h1>Edit Berita</h1>
      </div>
      <form action='/update.php' method='post' enctype='application/x-www-form-urlencoded'>
         <div class='form-group'>
            <input type='hidden' id='id' name='id' value='<?php echo $res[0]; ?>'>
            <label for='judul'>Judul</label>
            <input type='text' class='form-control' id='judul' name='judul' value='<?php echo $res[1]; ?>'>
         </div>
         <div class='form-group'>
            <label for='isi'>Isi</label>
            <input type='text' class='form-control' id='isi' name='isi' value='<?php echo $res[2]; ?>'>
         </div>
         <button type='submit' class='btn btn-primary'>Submit</button>
      </form>
   </div>

<?php
} catch (PDOException $e) {
   echo "Error: " . $e->getMessage();
}
$conn = null;
