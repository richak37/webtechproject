<?php
$conn = mysqli_connect("localhost","root","","order");
if($conn)
	
{
    echo "Successfully connected to the server. ";
}

else 
{
    echo"connection to server failed";
    exit();
}

$dish_id = $_POST["dish_id"];
$dish_name = $_POST["dish_name"];
$price = $_POST["price"];

$sq1 = "INSERT INTO order VALUES($dish_id,'$dish_name',$price)";
try {
    if (mysqli_query($conn, $sq1)) {
        echo "Data inserted sucessfully";
        include 'display.php';
    } else
        echo "Error while addding data";
} catch (Exception $e) {
    echo "exception occur";
}
?>