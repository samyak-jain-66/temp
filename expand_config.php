<?php
	$hostel=$_POST['hostel'];
	echo $hostel;
	$building=$_POST['build1'];
	$floor=$_POST['floor'];
	$room=$_POST['room'];
	$capacity=2;
	$availability=2;
	if($hostel=='Boys'){
		$con = mysqli_connect('localhost','root','','building_data');
		$query = "insert into boys_hostel values('$building','$capacity','$floor','$room','$availability')";
		$run = mysqli_query($con,$query);
		echo"<h5> Boys Hostel is successfully expanded!!</h5>";
	}else{
		$con = mysqli_connect('localhost','root','','building_data');
		$query = "insert into girls_hostel values('$building','$capacity','$floor','$room','$availability')";
		$run = mysqli_query($con,$query);
		echo"<h5> Girls Hostel is successfully expanded!!</h5>";
	}
?>