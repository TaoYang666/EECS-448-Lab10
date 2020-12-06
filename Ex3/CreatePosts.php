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
    $username =$_POST["username"];
    $post =$_POST["post"];
    $exist=false;
    $query1="SELECT user_id from Users";
    if ($username=="")
    {
        echo "<center>The text fileld empty, please input user name.</center>";
        exit();
    }
    if($post=="")
    {
        echo "<center>The text fileld empty, please input post text.</center>";
        exit();
    }
    if($username==""&&$post=="")
    {
        echo "<center>The text fileld empty, please input user name.</center>";
        echo "<center>The text fileld empty, please input post text.</center>";
        exit();
    }
    
        
    if($result=$mysqli->query($query1))
    {
        while($row=$result->fetch_assoc())
        {
            if($row["user_id"]==$username)
            {
                $exist=true;
            }
        }
        if(!$exist)
        {
            echo "<center>The post was not written by an existing user: " .$username. "</center> ";
        }
        // else if($post=="")
        // {

        // }
        else
        {
            $query2="INSERT INTO Posts (post_id,content,author_id) VALUES ('NULL','$post','$username');";
            if($mysqli->query($query2))
            {
                echo "<center>Post store store sucessfully.</center>";
            }
        }
    }
    // {
    //     echo "<center>User id " .$user. " store sucessfully.</center>";
    // }
    // else
    // {
    //     echo "<center>User id " .$user. " alread exists.</center>";
    // }
    
    $mysqli->close();
?>