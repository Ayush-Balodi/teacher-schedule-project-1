<?php
	include 'mysqlll.php';

	$username="";
	$row="";

	$username = $_COOKIE["Username"];
	$sql1 = "SELECT * from _teacher_slot";
	$result = mysqli_query($conn,$sql1);
	
	$sql2 = mysqli_query($conn,"SELECT Username FROM _teacher_slot where Username = '$username' ");

	
	
	if(mysqli_num_rows($sql2) > 0) 
    {
		echo "<tr>
			<th>Name</th>".
			"<th>Username</th>".
			"<th>Starting Time</th>".
			"<th>Ending Time</th>".
			"<th>Day</th>".
			"<br><br>".
		"<tr>";
        if(mysqli_num_rows($result) > 0) 
    	{
        	while( $row = mysqli_fetch_assoc($result) ) 
        	{
				if( $row["Username"] == $username ){
					echo "<tr><td>".$row["Username"]."</td> <td>".$row["Name"]."</td> <td>".$row["Starting_time"]."</td> <td>".$row["Ending_time"]."</td> <td>".$row["Day"]."</td></tr>";
					echo "<br><br>";
				}
        	}
    	}
    }
	else{
		echo "You have nothing to view.";
	}
?>