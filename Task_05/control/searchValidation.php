<?php 
include "..\model\db.php";
$connection=new db();
$error="";

if(isset($_REQUEST['showall']))
{
	$connection = new db();
    $conobj=$connection->OpenCon();

$userQuery=$connection->ShowAllProduct($conobj, "product");

    if(empty($_POST['pname']))
    {
        $error=" Product name can not empty !!";
    }


    if ($SearchProduct->num_rows > 0) 
	{    
    // output data of each row
    while($row = $SearchProduct->fetch_assoc()) 
	{

    echo "Product id : ".$row["P_id"]."<br>";
	echo "Product Name : ".$row["P_Name"]."<br>";
    echo "Product Description : ".$row["P_Desc"]."<br>";
    echo "Product Category : ".$row["P_Category"]."<br>";
    echo "Product price : ".$row["P_Price"]."<br>";
    echo "<img src='".$row['P_Picture']."'>";    
	}
	}
}


}




?>