<?php
ob_start();
define('myheader',TRUE);
require('header.php');
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
  document.getElementById("alloc").style.display = "block";
  document.getElementById("realloc").style.display = "block";
  document.getElementById("drop").style.display = "none";
  document.getElementById("logout").style.display = "block";
  document.getElementById("menu-toggle").style.display = "none";
</script>
</html>
<?php
if(isset($_POST['submit'])){
$uid = $_POST['sid'];
}
$con = mysqli_connect('localhost','root','','building_data');
$query = "SELECT * from allocation_data where student_id='$uid'";
$run = mysqli_query($con,$query);
$row1 = mysqli_num_rows($run);
if($row1>=1){
	while($row = mysqli_fetch_array($run)){
		$room = $row['room_no'];
	}
}
else{
	header('location:realloc.php');
}
$query1 = "SELECT EMAIL from student_table where ID='$uid'";
$run1 = mysqli_query($con,$query1);
$row2 = mysqli_num_rows($run1);
if($row2>=1){
	while($row3 = mysqli_fetch_array($run1)){
		$email = $row3['EMAIL'];
	}
}
else{
	header('location:realloc.php');
}
	$building = $room[0];
	if($building == 'b'){
		$query2 = "UPDATE boys_hostel set available = available+1 WHERE room_no = '$room'";
		$query3 = "DELETE from allocation_data WHERE student_id = '$uid'";
		$query4 = "DELETE from student_table where ID = '$uid'";
		$query5 = "DELETE from student_login where ID = '$email'";
		$run2 = mysqli_query($con,$query2);
		$run3 = mysqli_query($con,$query3);
		$run4 = mysqli_query($con,$query4);
		$run5 = mysqli_query($con,$query5);
		//header('location:student_form.php');
		echo"<h4>Successfully Removed!!</h4><br/>";
		echo"Kindly clear your all dues before leaving the hostel if any";
		echo $email;
		echo"<h3>Thanks for part being with ABC Hostels Pvt. Ltd. I hope you enjoyed our services.</h3>";
	}
	else{
		$query2 = "UPDATE girls_hostel set available = available+1 WHERE room_no = '$room'";
		$query3 = "DELETE from allocation_data WHERE student_id = '$uid'";
		$query4 = "DELETE from student_table where ID = '$uid'";
		$query5 = "DELETE from student_login where ID = '$email'";
		$run2 = mysqli_query($con,$query2);
		$run3 = mysqli_query($con,$query3);
		$run4 = mysqli_query($con,$query4);
		$run5 = mysqli_query($con,$query5);
		//header('location:student_form.php');
		echo"<h4>Successfully Removed!!</h4><br/>";
		echo $email;
		echo"Kindly clear your all dues before leaving the hostel if any";
		echo"<h3>Thanks for part being with ABC Hostels Pvt. Ltd. I hope you enjoyed our services.</h3>";
	}
?>