<?php
$conn = mysqli_connect("localhost", "root", "", "order");
try {
    if($conn)
        echo "Sucessfully Connected to database<br><br>";
    else {
        echo "error while addding data";
        exit(0);
    }
} catch (Exception $e) {
    echo "exception occur";
}
$dish_id=$_POST['dish_id'];

$sq1 = "SELECT * FROM amd WHERE dish_id=$dish_id";
try{
    $q1 = mysqli_query($conn, $sq1);
    if ($q1) {
            while ($info = mysqli_fetch_array($q1)) {
                echo "<br>Id is " . $info['dish_id'];
                echo "<br>dish name is " . $info['dish_name'];
                echo "<br>price is " . $info['price'];
          
                echo "<br>";
            }
    } else
        echo "not found";
}
catch (Exception $e) {
    echo "exception occurs";
}
?>