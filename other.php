<?php
    include ("config.php");

    $sql = "SELECT * FROM user ...";

    if (mysql_num_rows($result) > 0)
    {
        while($row = mysql_fetch_assoc($result)){
            $pwd = $row["password"];
        }
    }
?>
