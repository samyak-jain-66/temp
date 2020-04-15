<?php
$company=$_POST['company'];
$con = mysqli_connect("localhost", "root", "", "building_data");
$query="SELECT * from vendor where company='$company'";
$run = mysqli_query($con,$query);
    if($run){
    	echo "<table border='2px solid black'>";
			echo "<tr>";
					echo "<th> Payment To </th>";
					echo "<th> Method </th>";
					echo "<th> Amount</th>";
					echo "<th> Date </th>";
					echo "<th> Description </th>";
			echo "</tr>";
	while($row = mysqli_fetch_array($run)){		
			echo "<tr>";
                echo "<td>".$row['company']."</td>";
                echo "<td>".$row['method']."</td>";
                echo "<td>".$row['amount']."</td>";
                echo "<td>".$row['date1']."</td>";
                echo "<td>".$row['description']."</td>";
            echo "</tr>";   
        }
        echo "</table>";
    }          
?>