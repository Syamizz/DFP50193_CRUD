<?php
session_start();

    $con = mysqli_connect('localhost','root','','infopelajar');
    $query="select * from infodata";
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
<style>
        *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        body{
            background: skyblue;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th{
            background: orange;
        }
        #btn{
            background-image: linear-gradient(to right, #1FA2FF 0%, #12D8FA  51%, #1FA2FF  100%);
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          #btn:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
    </style>
<body>
<form action="insert.php">
    <input id="btn" type="submit" value="Insert data" />
</form>
<br><br><br>

<div class="col-md-12 ">
            <table align="center" style="width:1200px; line-height:40px;">
                <tr>
                    <td>Id</td>
                    <td>Nama</td>
                    <td>No Matrik</td>
                    <td>Kelas</td>
                    <td>Kad Pengenalan</td>
                    <td colspan='2'>Action</td>
                </tr>
                <?php
                $bil=1;
                while($rows=mysqli_fetch_assoc($result)){
                    $id=$rows['id'];
                    $nama=$rows['nama'];
                    $noMatrik=$rows['noMatrik'];
                    $kelas=$rows['kelas'];
                    $noKP=$rows['noKP'];

                    echo '<tr>';
                    echo "<td>$bil</td>";
                    echo "<td>$nama</td>";
                    echo "<td>$noMatrik</td>";
                    echo "<td>$kelas</td>";
                    echo "<td>$noKP</td>";
                    echo "<td> <a class='btn btn-success' href='update.php?up=$id'>Update</a></td>";
                    echo "<td> <a class='btn btn-danger' href='delete.php?rn=$id'>Delete</a></td>";
                    
                    $bil++;
                }
                ?>
                
            </table>
        </div>
</body>
</html>