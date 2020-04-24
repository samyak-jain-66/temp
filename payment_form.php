<?php
session_start();
$email = $_SESSION['semail'];
echo $email;
$con = mysqli_connect('localhost','root','','building_data');
$query="SELECT NAME,PHONE,hostel_opted from student_table where email='$email'";
$run = mysqli_query($con,$query);
while($row = mysqli_fetch_array($run)){
             $name =$row['NAME'];
             $phone=$row['PHONE'];
             $hostel=$row['hostel_opted'];
        }
        echo $name;
        echo $phone;
$_SESSION['sname']=$name;
$_SESSION['sphone']=$phone;
if($hostel=='Yes'){
	$amount=7000;
}else{
	$amount=5000;
}

?>
<html>
<head>
	<title>Payment</title>
</head>
<body>
	<?php 
	if($hostel=='Yes'){
       echo"<h3>".$name." has opted for hostel with food your fees will be 7000 per month.</h3>"; 
	}else{
       echo"<h3>".$name."has opted for hostel without food your fees will be 5000 per month.</h3>"; 
	}
	?>
	<form action="payment.php" method="post">
		<label>Amount</label>
		<input type="text" name="amount" value="<?php echo $amount ?>"><br/>
		<label>Month</label>
		<select name="month"><option>January</option><option>February</option><option>March</option><option>April</option><option>May</option><option>June</option><option>July</option><option>August</option><option>September</option><option>October</option><option>November</option><option>December</option></select><br/>
		<input type="hidden" name="email" value="<?php $email ?>" />
		<input type="hidden" name="name" value="<?php  $name ?>" />
		<input type="hidden" name="phone" id="phone" />
		<input type="submit" value="Go" name="submit"><br/>
	</form>
</body>
</html>