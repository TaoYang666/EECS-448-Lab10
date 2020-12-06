
<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "taoyang", "Xa3Eeh3n", "taoyang");
    if ($mysqli->connect_error) 
    {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    $query="SELECT post_id FROM Posts";
    echo "<center>Exercise 7: DeletePost</center>";
    $dele=$_POST["delete"];
    foreach($dele as $value)
    {
        $DELETE= "DELETE FROM Posts WHERE post_id='".$value."'";
        if($result=$mysqli->query($DELETE))
        {
            echo "<center>Post id: " .$value. " is deleted.</center>";
        }
        else
        {
            echo "<center>".$value. " can not be deleted.</center>";
        }
    }
    $mysqli->close();
?>