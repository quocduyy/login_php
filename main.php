<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location:login.html");
} else {
    echo "wellcome " . $_SESSION['user'];
}
?>
 
 
<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body>
    <a href="logout.php">Dang xuat</a>
    <p>sadda</p>
</body>
</html>