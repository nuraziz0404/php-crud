<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class='container'>
   <div class='m-2'>
      <a href='/' class='btn btn-primary float float-right'>Back</a>
      <h1>Edit Berita</h1>
   </div>
   <form action='/update.php' method='post' enctype='application/x-www-form-urlencoded' id="formedit">
      <div class='form-group'>
         <input type='hidden' id='id' name='id' value='{{$res[0]}}'>
         <label for='judul'>Judul</label>
         <input type='text' class='form-control' id='judul' name='judul' value='{{$res[1]}}'>
      </div>
      <div class='form-group'>
         <label for='isi'>Isi</label>
         <textarea name="isi" id="isi" cols="30" rows="10" form="formedit" class="form form-control">{{$res[2]}}</textarea>
      </div>
      <button type='submit' class='btn btn-primary'>Submit</button>
   </form>
</div>