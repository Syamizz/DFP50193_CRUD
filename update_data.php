<?php
    require 'conn.php';
    
    $id = $_GET['up'];
    $nama = $_POST['nama'];
    $noMatrik = $_POST['noMatrik'];
    $kelas = $_POST['kelas'];
    $noKP = $_POST['noKP'];

    $sql = "UPDATE infodata SET nama = ?, noMatrik = ?, kelas = ? , noKP=?  WHERE id =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssi', $nama, $noMatrik,$kelas,$noKP,$id);
    $stmt->execute();

    if ($conn->error) {
        ?>
        <script>
            alert('Maaf! Nama makanan tersebut sudah wujud dalam senarai');
            window.location = 'index.php';
        </script>
        <?php
        exit;
    } else {
        header('location: index.php');
    }