<!DOCTYPE html>
<html>
        </table>
    </body>
</html> 
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>  
       <form action="addelectro.php">
            <label for='type'>TYPE</label>
            <input type="text" id="type" name="type">
            <label for='brand'>BRAND</label>
            <input type="text" id="brand" name="brand">
             <label for='price'>PRICE</label>
            <input type="text" id="price" name="price">
            <input type="submit" value="ADD" name="ADD"/>
            </form>
        <table>
            <tr>
                <th>E_ID</th>
                <th>TYPE</th>
                <th>BRAND</th>
                <th>PRICE</th>
                <th>ACTION</th>
            </tr>
       
     <?php
        $connection = mysqli_connect("localhost","root","","boylesdb");
        $sql = "SELECT * FROM electronics";
       
       $result = $connection->query($sql);
     
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['e_id']."</td>";
            echo "<td>".$row['type']."</td>";
            echo "<td>".$row['brand']."</td> ";
            echo "<td>".$row['price']."</td> ";
            echo "<td>"
            . "<a class=\"btn\"href=\"editelectroview.php?e_id=".$row['e_id']."\">Edit</a>"
                    . "<a class=\"btn\"href=\"delete.php?e_id=".$row['e_id']."\" onclick=\"return confirm('Delete boylesdb?')\">Delete</a>"
                    . "</td> ";
            echo "</tr>";
        }
       $connection->close();
     
     ?>
        </table>
    </body>
</html>