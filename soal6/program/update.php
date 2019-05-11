<?php
require_once "function/config.php"
?>
<form action="" method="post">
    <?php
    $id=$_GET['id'];
    $sql=mysqli_query($conn,"SELECT * FROM skils WHERE id='$id'")or die(mysqli_error($conn));
    $row=mysqli_fetch_assoc($sql);
    ?>
    <div class="form-group">
        <label for="voting">tambah skils</label>
        <input type="text" class="form-control" id="voting" name='skils' required >
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="add" value="kirim">
    </div>
    <?php
     if(isset($_POST['add'])){
         $skl = $_POST['skils'];
         $sql=mysqli_query($conn,"SELECT * FROM skils WHERE id='$id'")or die(mysqli_error($conn));
         $row=mysqli_fetch_assoc($sql);
         $tambah=$row['skl'].$skl;
         $sql=mysqli_query($conn,"UPDATE skils SET skl='$tambah' WHERE id='$id'")or die(mysqli_error($conn));
         
         if ($sql) {
             echo "<script>
                     alert('data berhasil di ubah');
                  </script>";
             echo "<meta http-equiv='refresh' content='0;url=index.php'>"; 
         }
        }
?>
</form>


