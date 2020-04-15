<?php
$id=$_POST['id'];
$date=$_POST['date'];
$paid=$_POST['paid'];
$transaction=$_POST['trans'];
$amount=$_POST['amount'];
$remark=$_POST['remark'];
$month=$_POST['month'];
$con = mysqli_connect('localhost','root','','building_data');
$query="INSERT into fee values('$id','$date','$paid','$transaction','$amount','$remark','$month')";
$run = mysqli_query($con,$query);
if($run){
	echo"<h5>fee added successfullys!!</h5>";
}else{
	$con->error;
}
?>