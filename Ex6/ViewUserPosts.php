<?php
    
    $mysqli = new mysqli("mysql.eecs.ku.edu", "taoyang", "Xa3Eeh3n", "taoyang");
    if ($mysqli->connect_error) 
    {
        printf("<center>Connect failed: %s\n</center>", $mysqli->connect_error);
        exit();
    }
    $user=$_POST["id"];
    $query="SELECT content from Posts WHERE author_id='$user' ";
    $result=$mysqli->query($query);
    
        echo "<center><table border=2>";
            echo "<th>Users: ".$user."</th>";
            if($result->num_rows>0)
            {
                while ($row=$result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>Content: " .$row["content"]. "</td>";
                    echo "</tr>";
                }
            }
            
        echo "</table></center>";
    
    $mysqli->close();
?>