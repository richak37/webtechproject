<?php
$conn = mysqli_connect("localhost", "root", "", "order");
$cpuid=$_POST['dish_id'];
$price=$_POST['price'];

$sq1 = "UPDATE amd SET price=$price WHERE dish_id=$dish_id";
$q1=mysqli_query($conn,$sq1);

try {
    if ($q1) {
        echo "updated succesfully";
        include 'display.php';
    } else
        echo "error while updating data";
} catch (Exception $e) {
  echo "exception occurs";
}
?>