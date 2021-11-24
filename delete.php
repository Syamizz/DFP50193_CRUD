<?php
    require 'conn.php';
	error_reporting(0);
	$noMatrik = $_GET['rn'];
    $sql = "DELETE FROM infodata where id = ? ";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $noMatrik);
    $stmt->execute();
    header('location: index.php');