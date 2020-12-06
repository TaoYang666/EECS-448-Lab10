<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "taoyang", "Xa3Eeh3n", "taoyang");
    if ($mysqli->connect_errno) 
    {
        printf("<center>Connect failed: %s\n</center>", $mysqli->connect_error);
        exit();
    }
    $query="SELECT user_id FROM Users;";
    if($result=$mysqli->query($query))
    {
        echo "<center><table border=2>";
            echo "<th>Users</th>";
            while ($row=$result->fetch_assoc())
            {
                echo "<tr>";
                echo "<td>" . $row["user_id"] . "</td>";
                echo "</tr>";
            }
        echo "</table></center>";
    }
    $mysqli->close();
?>