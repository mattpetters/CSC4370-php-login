<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<!-- include("config.php"); -->
<body>
<?php 
    $host="localhost";
    $username="joe1";
    $password="mpetters1";
    $db_name="mpetters1";
    $conn=mysql_connect("$host","$username","$password");
    if (!$conn){
        die("cannot connect to server");
    } else {
        mysql_select_db("$db_name");
        echo "Connection established";
    }
?> 
</body>
</html>
