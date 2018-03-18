<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logging in...</title>
</head>
<body>
<?php 
    function showAlert($text) {
        echo '<script language="javascript">';
        echo "alert('$text')";
        echo '</script>';
    }

    function checkWithDb($username, $pass){
        // Connecting, selecting database
        $link = mysql_connect('localhost', 'mpetters1', 'mpetters1')
            or die('Could not connect: ' . mysql_error());
        echo 'Connected successfully';
        mysql_select_db('mpetters1') or die('Could not select database');

        // Performing SQL query
        $query = 'SELECT * FROM user';
        $sql = "select * from user where username='$username'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());

        while ($row = mysql_fetch_assoc($result)) {
            echo $row['username'];
            echo $row['password'];
        }
        // Free resultset
        mysql_free_result($result);

        // Closing connection
        mysql_close($link);
    }

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $validCrentials = $username != '' && $pwd != '';
    showAlert('page load');

    if (!validCredentials) {
        header('Location: home.html');
        exit();
    } else {
        //check database to see if user exists
        checkWithDB($username, $pwd);
    }


    /* 1. See both username and password are entered. If not, redirect to “home.html” */
/* 2. If password does not match, print “passwords did not match” and give a link to */
/* “home.html” */
/* 3. If both username and password match, start a session and create a session variable set for */
/* username. Then, redirect to “user_home.php”. */
?>
</body>
</html>
