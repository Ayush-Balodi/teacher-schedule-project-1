<?php

    include 'mysqlll.php';

    $sql = "SELECT Username , Name , Starting_time , Ending_time , Day FROM _teacher_slot";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Username: " . $row["Username"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>

DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste';