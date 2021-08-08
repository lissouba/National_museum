


<?php
include "config.php";
$sql = "DELETE FROM comments WHERE cid='" . $_GET["identity"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Deleted Successfully!')</script>";
    echo "<script>window.open('commentview1.php','_self')</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>