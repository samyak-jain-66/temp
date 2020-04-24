<html>
<head>
	<title>Feedback Form</title>
</head>
<body>
	<h1>Feedback Form</h1>
	<form action ="feedback.php" method="post">
		<label><h2>Select feedback type</h2></label>
		<select name='type'>
			<option>Cleanliness</option>
			<option>Mess</option>
			<option>Facility</option>
			<option>Others</option>
		</select><br/>
		<label>Feedback Description</label>
		<textarea name='area'></textarea><br/>
		<input type="submit" value='Save' name='submit'/>
	</form>
</body>
</html>
<?php
session_start();
$email = $_SESSION['semail'];
$type=isset($_POST['type'])?$_POST['type']:'';
$desc=isset($_POST['area'])?$_POST['area']:'';
$con = mysqli_connect('localhost','root','','building_data');
$query = "INSERT into feedback values('$email','$type','$desc')";
$run=mysqli_query($con,$query);
if($run){
	echo"submitted successfully";
}else{
	echo"Not submitted";
}
?>