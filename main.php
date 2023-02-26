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
  
    <h1>helloo</h1>
</body>
</html>