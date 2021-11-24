<?php
require 'conn.php';
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $noMatrik = $_POST['noMatrik'];
    $kelas = $_POST['kelas'];
    $noKP = $_POST['noKP'];

    $sql="INSERT INTO infodata(nama,noMatrik,kelas,noKP) VALUES(?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss',$nama,$noMatrik,$kelas,$noKP);
    $stmt->execute();
    header("Location: index.php");
    die;
}
?>