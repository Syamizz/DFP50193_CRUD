<?php
	$conn = mysqli_connect('localhost','root','','infopelajar');
	error_reporting(0);
	$noMatrik = $_GET['rn'];
    $query = "delete from infodata where id = '$noMatrik' ";

    $data=mysqli_query($conn,$query);
    if($data){
        ?><script>
            alert("Data telah dipadam")
            window.location='index.php'
        </script><?php
    }
    else{
        echo "<font color='red'><Failed to delete record from Database";
    }
    ?>