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
    <form name="InsertData" action="Insertdata.php" method="POST">
<li>productid:</li><li><input type="text" name="productid" /></li>
<li>productname:</li><li><input type="text" name="productname" /></li>
<li>size:</li><li><input type="text" name="sizes"/></li>
<li>basicprice:</li><li><input type="text" name="basicprice"/></li>
<li>residual:</li><li><input type="text" name="residual"/></li>
<li><input type="submit"/></li>
</form>
</ul>

<?php

if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=PTV', 'postgres', 'Vupro1234@');
}  else {
     
   $db = parse_url(getenv("DATABASE_URL"));
   $pdo = new PDO("pgsql:" . sprintf(
         "host=
ec2-34-224-229-81.compute-1.amazonaws.com
;port=5432;user=zlnyxxofzmlpua;password=f8fc457aac53ba16f964803393cf3067618e95f71018d4665feada1a6a156dac;dbname=dblj7ghfugk74s",
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


$sql = "INSERT INTO product(productid, productname, sizes, basicprice, residual)"
        . " VALUES('$_POST[productid]','$_POST[productname]','$_POST[sizes]','$_POST[basicprice]','$_POST[residual]')";
$stmt = $pdo->prepare($sql);
//$stmt->execute();
 if (is_null($_POST[productid])) {
   echo "productid must be not null";
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
