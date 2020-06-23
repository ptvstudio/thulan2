<!DOCTYPE html>
<html>
    <head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {
list-style: none;
}
</style>
</head>
<body>
<h1>INSERT DATA TO DATABASE</h1>
<h2>Enter data into student table</h2>
<ul>
    <form name="InsertData" action="Insertdata.php" method="POST" >
<li>Product ID:</li><li><input type="text" name="productid" /></li>
<li>Product Name:</li><li><input type="text" name="productname" /></li>
<li>Size:</li><li><input type="text" name="sizes" /></li>
<li>Basicprice:</li><li><input type="text" name="basicprice" /></li>
<li>Residual:</li><li><input type="text" name="residual" /></li>
<li><input type="submit" /></li>
</form>
</ul>

<?php

if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
}  else {
     
   $db = parse_url(getenv("DATABASE_URL"));
   $pdo = new PDO("pgsql:" . sprintf(
         "host=
ec2-35-172-73-125.compute-1.amazonaws.com
;port=5432;user=tjdbbuqrfdlyyq;password=25ffc0cd7a2f79a8d6cc7e1d560a8f4ae1da44f7dfcfae4a795b7c3fe3cf3915;dbname=d120l5u259o1la",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
   ));
}  

if($pdo === false){
     echo "ERROR: Could not connect Database";
}


$sql = "INSERT INTO product(productid, productname,sizes, basicprice,residual)"
        . " VALUES('$_POST[productid]','$_POST[productname]','$_POST[sizes]','$_POST[basicprice]','$_POST[residual]')";
$stmt = $pdo->prepare($sql);
//$stmt->execute();
 if (is_null($_POST[StudentID])) {
   echo "StudentID must be not null";
 }
 else
 {
    if($stmt->execute() == TRUE){
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: ";
    }
 }
?>
</body>
</html>
