<!DOCTYPE>
<html>
    <head>
        <title>Search data</title>
    </head>    
    <body>
    <center>
        <h1>Search Product</h1>
        <form action="" method="POST">
            <input type="text" name="productid" placeholder="Enter ID to search"/><br/>   
            <input type="submit" name="search" value="search Data">
        </form>
        <?php
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, 'product');
        
        if(isset($_POST['search']))
        {
            $productid = $_POST['productid'];
            
            $sql = "SELECT * FROM Product where productid='$productid' ";
            $sql = mysqli_query($connection, $query);
            
            while($row = mysqli_fetch_array($query_run))
            {
                ?>
        <form action="" method="POST">
            <input type="hidden" name="productid" value="<?php echo $row['productid'] ?>"/><br>
            <input type="text" name="productname" value="<?php echo $row['productname'] ?>"/><br>
            <input type="text" name="sizes" value="<?php echo $row['sizes'] ?>"/><br>>
            <input type="text" name="basicprice" value="<?php echo $row['basicprice'] ?>"/><br>>
            <input type="text" name="residual"value="<?php echo $row['residual'] ?>"/><br>>
        </form>
        <?php
            }
        }
        
        ?>
    </center>
    </body>   
</html>