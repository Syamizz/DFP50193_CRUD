<?php
require 'conn.php';

if(isset($_GET['up'])){
    $noID = $_GET['up'];
    $sql="SELECT * FROM infodata WHERE id=$noID";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $rows = $result->fetch_array();
    
    $id=$rows['id'];
    $nama=$rows['nama'];
    $noMatrik=$rows['noMatrik'];
    $kelas=$rows['kelas'];
    $noKP=$rows['noKP'];
      
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
               <?php 
               echo "<form action='update_data.php?up=$noID' method='post'>"
               ?>
               
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
                          <td><input required type="text" class="form-control" name="kelas"   value="<?php echo "$kelas"?>"></td>  
                        </tr>
                        <tr>
                          <th>No Kad Pengenalan</th>
                          <td><input required type="text" class="form-control" name="noKP" minlength="12" maxlength="12" value="<?php echo "$noKP"?>"></td>  
                        </tr>
                        </table>
                        <hr>
                        <div class="form-group">
                            <button id="btn" name="submit" type="submit" class="btn btn-primary">Update</button>
                   </div>
               </form>
           </div>
            
        </div>
    </div>
</body>
</html>
	