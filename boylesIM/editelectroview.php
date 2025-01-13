<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>  
  <?php
       $e_id= $_GET['e_id'];
       
        $connection = mysqli_connect("localhost","root","","boylesdb");
        $sql = "SELECT * FROM Electronics WHERE e_id=$e_id";
       $result = $connection->query($sql);
       $row = mysqli_fetch_assoc($result);
         
 ?>
       <form action="editelectro.php" method="POST">
           <input type="hidden" id="e_id" name="e_id" value="<?php echo $row['e_id'];?>">
           <label for="type">TYPE</label>
           <input type="text" id="type" name="type" placeholder="type" value="<?php echo $row['type'];  ?>">
           <label for="brand">BRAND</label>
           <input type="text" id="brand" name="brand" placeholder="brand" value="<?php echo $row['brand'];  ?>">
            <label for="price">PRICE</label>
            <input type="text" id="price" name="price" placeholder="price" value="<?php echo $row['price'];  ?>">
            <input type="submit" value="Edit" onclick="return confirm()">
          </form>
    </body>
</html>