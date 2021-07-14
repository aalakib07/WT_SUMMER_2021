<?php
include "..\control\searchValidation.php";
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); 
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>Search and Show Product </h2>

<form action='' method='post'>

Show all: 
<input type='submit' name="showall" value="Show All">


</form>

<form action='' method='post'>

Product Name: 
<input type='text' name="pname"><?php echo $error; ?><br><br>
<input type='submit' name="search" value="Search">

<h3><a href="pageone.php">Back</a></h3>
</form>


</body>
</html>


<?php
include "..\model\db.php";
$connection=new db();
$conobj=$connection->OpenCon();

$SearchProduct=$connection->ShowAll($conobj,"product");

if ($SearchProduct->num_rows > 0) {

    // output data of each row
    while($row = $SearchProduct->fetch_assoc()) {

      echo "Product id : ".$row["P_id"]."<br>";
      echo "Product Name : ".$row["P_Name"]."<br>";
      echo "Product Description : ".$row["P_Desc"]."<br>";
      echo "Product Category : ".$row["P_Category"]."<br>";
      echo "Product price : ".$row["P_Price"]."<br>";
      echo "<img src='".$row['P_Picture']."'><br><br>";

    }
}

?>

<h3><a href="pageone.php">Back</a></h3>