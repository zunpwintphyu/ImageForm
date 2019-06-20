<?php 
include "conf/config.php";
$id= $_GET['id'];
echo $id;
$result = mysqli_query($conn,"DELETE FROM images WHERE id='$id'");
var_dump($result);
//header("location:http://localhost/Imageform/index.php");
?>
