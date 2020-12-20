<?php
include 'connn.php';
extract($_GET);
$query="DELETE FROM  `tablecrud` WHERE id='$id'";
mysqli_query($con,$query);
header('location:display.php');
  ?>
