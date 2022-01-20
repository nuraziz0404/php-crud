<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class='m-2'>
   <a href="/create.php" class="btn btn-primary">Create new Berita</a>
</div>
<table class='table'>
   <tr scope='col' class='thead-dark table-bordered mw-100'>
      <th scope='col' style="width: 5%;">Id</th>
      <th scope='col' style="width: 15%;">Judul</th>
      <th scope='col'>Isi</th>
      <th scope='col' style="width: 10%;">Action</th>
   </tr>
   @foreach ($res as $row)
   <tr scope="row">
      <td>{{++$i}}</td>
      <td>{{$row[1]}}</td>
      <td>{{$row[2]}}</td>
      <td>
         <form action="/delete.php" method="post" enctype="application/x-www-form-urlencoded">
            <input type="hidden" name="id" value="{{$row[0]}}">
            <a class="btn float btn-primary m-1" href="/edit.php?id={{$row[0]}}">Edit</a>
            <button type="submit" class="btn btn-danger m-1">Delete</button>
         </form>
      </td>
   </tr>
   @endforeach
</table>