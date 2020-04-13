<?php
$id=$_POST['id'];
$date=$_POST['date'];
$presence=$_POST['presence'];
$leave=$_POST['leave'];
$con = mysqli_connect('localhost','root','','building_data');
$query="INSERT into attendance values('$id','$date','$presence','$leave')";
$run = mysqli_query($con,$query);
if($run){
	echo"<h5> attendance successfully added!!</h5>";
}else{
	$con->error;
}
?>