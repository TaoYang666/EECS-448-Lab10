<?php
    // $dbhost = 'mysql.eecs.ku.edu';
    // $dbuser = 'taoyang';
    // $dbpass = 'Xa3Eeh3n';
    $mysqli = new mysqli("mysql.eecs.ku.edu", "taoyang", "Xa3Eeh3n", "taoyang");
    if ($mysqli->connect_error) 
    {
        printf("<center>Connect failed: %s\n</center>", $mysqli->connect_error);
        exit();
    }
    $user =$_POST["userid"];
    if($user=="")
    {
        echo "<center>The text fileld empty, please input user id.</center>";
        exit();
    }
    
    
        $query="INSERT INTO Users (user_id) VALUES ('".$user."')";
        if($result=$mysqli->query($query))
        {
            echo "<center>User id " .$user. " store sucessfully.</center>";
        }
        else
        {
            echo "<center>User id " .$user. " alread exists.</center>";
        }
    
    $mysqli->close();
?>