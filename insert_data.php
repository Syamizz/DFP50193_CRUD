<?php

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $noMatrik = $_POST['noMatrik'];
    $kelas = $_POST['kelas'];
    $noKP = $_POST['noKP'];

    $mysqli = new mysqli('localhost', 'root', '', 'infopelajar');
    $stmt = $mysqli->prepare("INSERT INTO infodata(nama,noMatrik,kelas,noKP) VALUES(?,?,?,?)");
    $stmt->bind_param('ssss',$nama,$noMatrik,$kelas,$noKP);
    $stmt->execute();
    $stmt->close();
    $mysqli->close();
    header("Location: index.php");
    die;
}
?>