<?php
require_once "function/config.php"
?>
<form action="" method="POST">
    <div class="form-group">
        <label for="nama">tambah nama programer</label>
        <input type="text" class="form-control" id="nama" name='nama' required>
    </div>
    <div class="form-group">
        <label for="skils">skils programer</label>
        <input type="text" class="form-control" id="skils" name='skl'>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="add" value="kirim">
    </div>
    <?php
     if(isset($_POST['add'])){
         $nama = $_POST['nama'];
         $skl = $_POST['skl'];
         $sql=mysqli_query($conn,"INSERT INTO user VALUES('','$nama')")or die(mysqli_error($conn));
         $tampil=mysqli_query($conn,"SELECT LAST_INSERT_ID()");
         while ($r=mysqli_fetch_array($tampil)) {
             $id=$r[0];
         }

         $sql2=mysqli_query($conn,"INSERT INTO skils VALUES('','$skl','$id')")or die(mysqli_error($conn));
        
         
         if ($sql && $sql2 ) {
             echo "<script>
                     alert('data berhasil di tambah');
                  </script>";
             echo "<meta http-equiv='refresh' content='0;url=index.php'>"; 
         }
        }
?>
</form>


