


<?php
include "config.php";
$sql = "DELETE FROM book WHERE id='" . $_GET["identity"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Deleted Successfully!')</script>";
    echo "<script>window.open('bookview1.php','_self')</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>