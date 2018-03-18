<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Here</title>
</head>
<body>
<?php 
    function connectToDB(){
        // Connecting, selecting database
        $link = mysql_connect('localhost', 'mpetters1', 'mpetters1')
            or die('Could not connect: ' . mysql_error());
        echo 'Connected successfully';
        mysql_select_db('mpetters1') or die('Could not select database');
        return $link;

    }

    function queryCheckUserExists($username){
    
        $query = 'SELECT * FROM user';
        $sql = "select * from user where username='$username'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());

        while ($row = mysql_fetch_assoc($result)) {
            if $row['username'] == $username return true;
        }

        return false;
        // Free resultset
        mysql_free_result($result);
    }

    function createNewUser($user, $pass, $name, $top1, $top2, $top3, $top4, $top5, $secQuestion, $secAnswer){
         
        $sql = "INSERT INTO user (username, password, name, topic1, topic2, topic3, topic4, topic5, question, answer)
VALUES ($user, $pass, $name, $top1, $top2, $top3, $top4, $top5, $secQuestion, $secAnswer)";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());

        // Free resultset
        mysql_free_result($result);
    }

    function closeDB($link){
        // Closing connection
        mysql_close($link);
    }

    $user = $_POST['username'];
    $pass = $_POST['pwd'];
    $passConf = $_POST['passConf'];
    $name = $_POST['name'];
    $top1 = $_POST['topic1'];
    $top2 = $_POST['topic2'];
    $top3 = $_POST['topic3'];
    $top4 = $_POST['topic4'];
    $top5 = $_POST['topic5'];
    $secQuestion = $_POST['question'];
    $secAnswer = $_POST['answer'];

    /* 1. Check if username is entered */
    if ($user != ''){
        connectToDB();
        if(!queryCheckUserExists($user)){
            if ($pass == $passConf){
                /* 5. If both passwords match, create a record with all the fields provided. */
                createNewUser($user, $pass, $name, $top1, $top2, $top3, $top4, $top5, $secQuestion, $secAnswer);
            }
        } else {
           echo "Username is taken!"; 
        }
        /* 4. If there is no record, match both passwords from the form. */
    }


?> 
</body>
</html>
