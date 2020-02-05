<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/style.css" >
 <!-- icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>

</body>
</html>
<?php
// koneksi
require_once('koneksi.php');
// require_once('keamanan.php');
$nik=$_GET['nik'];

// echo $id;
$query="SELECT * FROM tb_kependudukan WHERE nik = '$nik'";
$data=mysqli_query($conn,$query);

// menampung hasil
$row=mysqli_fetch_assoc($data);
// var_dump($row);

?>
<form method="post" action="ubah_data.php">
  <contact class="contact" id="pendaftaran">
        <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="input"><font color="white">Ubah Data</font></h2>
             <hr>
            </div>
        </div>

        <div class="row">
          <div class="col-sm-8 offset-2">
            <form>
              <div class="form-group">
                <label for="nama"><font color="white">NIK</font></label>
                <input type="text" name="nik" class="form-control" placeholder="" required="required" value="<?php echo $row['nik'];  ?>">
              </div>
              <div class="form-group">
                <label for="email"><font color="white">Nama</font></label>
                <input type="text" name="nama" class="form-control" placeholder="" required="required" value="<?php echo $row['nama'];  ?>">
              </div>
              
              <div class="form-group">
                <label for="pesan"><font color="white">Gender</font></label>
              <select class="form-control" name="gender">
                <option>-- Pilih  --</option>
                <option value="L" <?php if(!strcmp($row['gender'],"L")){ echo "SELECTED";} ?> >Laki - Laki</option>
                <option value="P" <?php if(!strcmp($row['gender'],"P")){ echo "SELECTED";} ?> >Perempuan</option>
              </select>
              </div>
              <div class="form-group">
                <label for="telp"><font color="white">Alamat</font></label>
               <input type="text" name="alamat" class="form-control" placeholder="" required="required" value="<?php echo $row['alamat'];  ?>">
              </div>
              <div class="form-group">
                <label for="pesan"><font color="white">Status</font></label>
                <input type="text" name="status" class="form-control" required="required" value="<?php echo $row['status'];  ?>">
              </div>
              <div class="form-group">
                <label for="pesan"><font color="white">Golongan</font></label>
              <select class="form-control" name="golongan">
                <option>-- Pilih  --</option>
                <option value="WNI" <?php if(!strcmp($row['golongan'],"WNI")){ echo "SELECTED";} ?> >WNI</option>
                <option value="WNA" <?php if(!strcmp($row['golongan'],"WNA")){ echo "SELECTED";} ?> >WNA</option>
              </select>
              </div>
             <p>
              <button type="submit" class="btn btn-primary"><i class="material-icons">swap_horiz</i>Ubah</button>
              <button type="submit" method="post" action="tampil_data.php" class="btn btn-danger"><i class="material-icons">clear</i>Batal</button>
            </p>
            


            </form>
          </div>  
        </div>
      </div>
    </contact>
</form>