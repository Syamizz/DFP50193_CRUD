<?php
$conn = mysqli_connect('localhost','root','','infopelajar');

if(isset($_GET['up'])){
    $noID = $_GET['up'];
    $query="SELECT * FROM infodata WHERE id=$noID";
    $result=mysqli_query($conn,$query);

    if($rows=mysqli_fetch_assoc($result)){
        $nama=$rows['nama'];
        $noMatrik=$rows['noMatrik'];
        $kelas=$rows['kelas'];
        $noKP=$rows['noKP'];
      }
}

if(isset($_POST['submit'])){
    $conn = mysqli_connect('localhost','root','','infopelajar');
    $nama = $_POST['nama'];
    $noMatrik = $_POST['noMatrik'];
    $kelas = $_POST['kelas'];
    $noKP = $_POST['noKP'];

    $query = "UPDATE infodata SET nama='$nama', noMatrik='$noMatrik', kelas='$kelas', noKP='$noKP' WHERE id='$noID' ";
    
    if($result=mysqli_query($conn,$query)){
        ?>
        <script>
            alert('Data telah dikemaskini')
            window.location='index.php'
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('Data ralat')
        </script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data</title>
</head>
<style>
    *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        body{
            background: skyblue;
            font-family: Arial, Helvetica, sans-serif;
        }
</style>
<body>
<div class="container">
        <h1>KEMASKINI BORANG DATA</h1>
        <hr>
        <div class="row">
           <div class="col-md-8">
               <form action="" method="post">
                    <table>
                        <tr>
                          <th>Nama</th>
                          <td><input required type="text" class="form-control" name="nama" value="<?php echo "$nama"?>"></td>  
                        </tr>
                        <tr>
                          <th>No Matrik</th>
                          <td><input required type="text" class="form-control" name="noMatrik"  minlength="12" maxlength="12" value="<?php echo "$noMatrik"?>"></td>  
                        </tr>
                        <tr>
                          <th>Kelas</th>
                          <td><input required type="text" class="form-control" name="kelas"  minlength="12" maxlength="12" value="<?php echo "$kelas"?>"></td>  
                        </tr>
                        <tr>
                          <th>No Kad Pengenalan</th>
                          <td><input required type="text" class="form-control" name="noKP" value="<?php echo "$noKP"?>"></td>  
                        </tr>
                        <div class="form-group">
                       <button id="btn" name="submit" type="submit" class="btn btn-primary">Update</button>
                   </div>
               </form>
           </div>
            
        </div>
    </div>
</body>
</html>
	