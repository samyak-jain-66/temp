<?php
$id=$_POST['id'];
$con = mysqli_connect('localhost','root','','building_data');
$query="SELECT * from attendance where id='$id' order By 'date1'";
$run = mysqli_query($con,$query);
    if($run){
    	echo "<table border='2px solid black'>";
			echo "<tr>";
					echo "<th> Attendance Id </th>";
					echo "<th> Attendance Date </th>";
					echo "<th> Is Presence </th>";
					echo "<th> Is Leave </th>";
			echo "</tr>";
	while($row = mysqli_fetch_array($run)){		
			echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['date1']."</td>";
                echo "<td>".$row['ispresent']."</td>";
                echo "<td>".$row['isleave']."</td>";
            echo "</tr>";   
        }
        echo "</table>";
    }          
?>