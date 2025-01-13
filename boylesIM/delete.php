<?php

$e_id = $_GET['e_id'];


$connection = mysqli_connect("localhost","root","","boylesdb");
     
     $sql = "DELETE FROM Electronics WHERE e_id= $e_id";
     
     $result = $connection->query($sql);
     
     $connection->close();
     
     header("location:index.php");