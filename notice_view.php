<?php
$con = mysqli_connect('localhost','root','','building_data');
$query="SELECT * from notice_board order by 'date1' desc";
$run = mysqli_query($con,$query);
    if($run){
    	echo "<table border='2px solid black'>";
			echo "<tr>";
					echo "<th> Serial NUmber </th>";
					echo "<th> Notice </th>";
					echo "<th> Description </th>";
					echo "<th> Created Date </th>";
			echo "</tr>";
	while($row = mysqli_fetch_array($run)){		
			echo "<tr>";
                echo "<td>".$row['serial']."</td>";
                echo "<td>".$row['notice']."</td>";
                echo "<td>".$row['description']."</td>";
                echo "<td>".$row['createdDate']."</td>";
            echo "</tr>";   
        }
        echo "</table>";
    }          
?>