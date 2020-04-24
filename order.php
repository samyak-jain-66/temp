<?php
 session_start();
 $email=$_SESSION['semail'];
 $con = mysqli_connect('localhost','root','','building_data');
 $query="SELECT pay_id, month, orderReceipt, Amount from transaction where email='$email' order by created_at desc";
 $run = mysqli_query($con,$query);
 if($run){
    	echo "<table border='2px solid black'>";
			echo "<tr>";
					echo "<th> Payment Id </th>";
					echo "<th> Fee Month </th>";
					echo "<th> Order Receipt </th>";
					echo "<th> Amount </th>";
			echo "</tr>";
	while($row = mysqli_fetch_array($run)){		
			echo "<tr>";
                echo "<td>".$row['pay_id']."</td>";
                echo "<td>".$row['month']."</td>";
                echo "<td>".$row['orderReceipt']."</td>";
                echo "<td>".$row['Amount']."</td>";
            echo "</tr>";   
        }
        echo "</table>";
        echo"<button><a href='studMain.php'>Back</a></button>";
    }
?>          