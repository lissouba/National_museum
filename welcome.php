<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login11.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php header("Location: adminpage.html");?>
</body>
</html>