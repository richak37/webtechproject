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

$delete = $_POST['delete'];

$sq1 = "DELETE FROM order WHERE dish_id=$delete";
$q1 = mysqli_query($conn, $sq1);
try {
    if ($q1) {
        echo "Deleted succesfully";
    } else
        echo "Error while deleting";
} catch (Exception $e) {
    echo "exception occur";
}
?>