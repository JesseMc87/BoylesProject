<?php
     $type = $_GET['type'];
     $brnd = $_GET['brand'];
     $prc = $_GET['price'];
     
     echo $type. "brnd".$brnd."prc".$prc;
     
     $connection = mysqli_connect("localhost","root","","boylesdb");
     
     $sql = "INSERT INTO Electronics VALUES(0,'$type','$brnd','$prc')";
     
     $result = $connection->query($sql);
     
     $connection->close();
     
     header("location:index.php");