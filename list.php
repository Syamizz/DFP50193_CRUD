<?php
session_start();

    $con = mysqli_connect('localhost','root','','infopelajar');
    $query="select * from info";
    $result=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-md-12 ">
            <table align="center" style="width:1200px; line-height:40px;">
                <tr>
                    <td>Nama</td>
                    <td>No Matrik</td>
                    <td>Kelas</td>
                    <td>Kad Pengenalan</td>
                    <td>Action</td>
                </tr>
                <?php
                while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['nama'];?></td>
                        <td><?php echo $rows['noMatrik'];?></td>
                        <td><?php echo $rows['kelas'];?></td>
                        <td><?php echo $rows['noKP'];?></td>
                        <td><button><a href="edit.php">Edit</a></button></td>
                    </tr>
                <?php
                }
                ?>
                
            </table>
        </div>
</body>
</html>