<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class='container'>
   <div class='m-2'>
      <a href='/' class='btn btn-primary float float-right'>Back</a>
      <h1>Create new berita</h1>
   </div>
   <div class='form'>
      <form action='store.php' method='post' enctype='application/x-www-form-urlencoded'>
         <div class='form-group'>
            <label for='judul'>Judul</label>
            <input type='text' class='form-control' id='judul' name='judul'>
         </div>
         <div class='form-group'>
            <label for='isi'>Isi</label>
            <input type='text' class='form-control' id='isi' name='isi'>
         </div>
         <button type='submit' class='btn btn-primary'>Submit</button>
      </form>
   </div>
</div>