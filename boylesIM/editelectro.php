<?php

$e_id = $_POST['e_id'];
$type = $_POST['type'];
$brand = $_POST['brand'];
$price = $_POST['price'];

$connection = mysqli_connect("localhost","root","","boylesdb");
     
     $sql = "UPDATE Electronics SET Type='$type',brand='$brand',price=$price WHERE e_id=$e_id";
     
     $result = $connection->query($sql);
     
     $connection->close();
     
     header('location:index.php');
