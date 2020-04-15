<?php
$con = mysqli_connect("localhost", "root", "", "building_data");
$query="SELECT * from expense";
$run = mysqli_query($con,$query);
    if($run){
    	echo "<table border='2px solid black'>";
			echo "<tr>";
					echo "<th> Company </th>";
					echo "<th> Date </th>";
					echo "<th> Amount</th>";
					echo "<th> Related </th>";
			echo "</tr>";
	while($row = mysqli_fetch_array($run)){		
			echo "<tr>";
                echo "<td>".$row['company']."</td>";
                echo "<td>".$row['date1']."</td>";
                echo "<td>".$row['amount']."</td>";
                echo "<td>".$row['related']."</td>";
            echo "</tr>";   
        }
        echo "</table>";
    }          
?>