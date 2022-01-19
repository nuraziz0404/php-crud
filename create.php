<?php

echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">';
echo "<div class='container'>";
echo "<div class='m-2'>";
echo "<a href='/' class='btn btn-primary float float-right'  >Back</a>";
echo "<h1>Create new data</h1>";
echo "</div>";
echo "<div class='form'>";
echo "<form action='store.php' method='post' enctype='application/x-www-form-urlencoded'>";
echo "<div class='form-group'>";
echo "<label for='judul'>Judul</label>";
echo "<input type='text' class='form-control' id='judul' name='judul'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='isi'>Isi</label>";
echo "<input type='text' class='form-control' id='isi' name='isi'>";
echo "</div>";
echo "<button type='submit' class='btn btn-primary'>Submit</button>";
echo "</form>";
echo "</div>";
echo "</div>";