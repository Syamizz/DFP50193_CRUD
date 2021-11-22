<?php

    $conn = mysqli_connect('localhost','root','','infopelajar');
    $noID = $_GET['up'];
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
