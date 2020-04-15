<?php
$id=isset($_POST['id'])?$_POST['id']:'';
$new_pass=isset($_POST['pass'])?$_POST['pass']:'';
$con_pass=isset($_POST['pass1'])?$_POST['pass1']:'';
$con = mysqli_connect('localhost','root','','building_data');
$query="SELECT * from admin_table where email='$id'";
$run = mysqli_query($con,$query);
if(mysqli_num_rows($run) > 0){
	if($new_pass==$con_pass){
		$password=$con_pass;
		$query1="UPDATE admin_table set password='$password' where email='$id'";
        $run1 = mysqli_query($con,$query1);
        echo "<h3>Password has been updated Successfully!!</h3>";
	}else{
		echo "<h3> Password Mismatch</h3>";
	}
}else{
	echo"<h3>Wrong id enetered !!!</h3>";
	header( "refresh:2;url=reset.php" );
}
?>
