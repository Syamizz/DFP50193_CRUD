<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "infopelajar";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to connect");
}
?>