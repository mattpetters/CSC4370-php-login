<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logging in...</title>
</head>
<body>
<? php 
    $username = $_POST["username"]
    $pwd $_POST["pwd"];
    $validCrentials = $username != '' && $pwd != '';

    if (!validCredentials) {
        header('Location: home.html');
         exit();
    } else {
        //check database to see if user exists
        echo $username;
        echo $pwd;
        $sql = "select * from user where username='$username'";
        //check to make sure passwords match
        
    
    }


    /* 1. See both username and password are entered. If not, redirect to “home.html” */
/* 2. If password does not match, print “passwords did not match” and give a link to */
/* “home.html” */
/* 3. If both username and password match, start a session and create a session variable set for */
/* username. Then, redirect to “user_home.php”. */
?>
</body>
</html>
