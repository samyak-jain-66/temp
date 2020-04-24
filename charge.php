<?php
    session_start();
	$razorpay_payment_id = $_POST['razorpay_payment_id'];
	$razorpay_order_id=$_POST['razorpay_order_id'];
	$razorpay_signature=$_POST['razorpay_signature'];
	$email = $_SESSION['semail'];
	$month = $_SESSION['smonth'];
    $amount = $_SESSION['samount'];
    $order =$_SESSION['orderReceipt'];

	$con = mysqli_connect('localhost','root','','building_data');
	$sql="INSERT INTO `transaction`(`email`, `payment_id`, `order_id`, `signature_hash`, `month`,`orderReceipt`, `Amount`) VALUES ('$email','$razorpay_payment_id','$razorpay_order_id','$razorpay_signature','$month','$order','$amount')";
	$run = mysqli_query($con,$sql);
	if($run){
	     echo "Razorpay success ID: ". $razorpay_payment_id;
	     echo "You can note down success Id for future reference";
	     echo "You will be redirecting to dashboard after 5 seconds";
	     header("refresh: 6; url = studMain.php"); 
    
	 }else{
	 	echo "Error Occured";
	 }
	$con->close();
?>