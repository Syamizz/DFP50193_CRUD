<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "infopelajar";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to connect");
}
?>