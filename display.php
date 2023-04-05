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

$sq1 = "SELECT * FROM order";
try {
    $q1 = mysqli_query($conn, $sq1);
    if ($q1) {
        while ($info = mysqli_fetch_array($q1)) {
            echo "<br>Id is " . $info['dish_id'];
            echo "<br>dish name is " . $info['dish_name'];
            echo "<br>price is " . $info['price'];
    
        }
    } else
        echo "error";
} catch (Exception $e) {
    echo "exception occurs";
}
mysqli_close($conn);
?>