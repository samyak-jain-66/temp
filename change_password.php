<?php
session_start();
$email=$_SESSION['semail'];
echo"<form action='change_password.php' method='post'>";
echo"<label>Present Password</label><input type='text' name='pass1'/><br/>";
echo"<label>New Password</label><input type='text' name='pass2'/><br/>";
echo"<label>Confirm Password</label><input type='text' name='pass3'/><br/>";
echo"<input type='submit' value='Submit' name='submit'/><br/>";
$con = mysqli_connect('localhost','root','','building_data');
$query="SELECT PASSWORD from student_login where email='$email'";
$run = mysqli_query($con,$query);
while($row = mysqli_fetch_array($run)){
            $password =$row['PASSWORD'];
      }
$password1=isset($_POST['pass1'])?$_POST['pass1']:'';
$password2=isset($_POST['pass2'])?$_POST['pass2']:'';
$password3=isset($_POST['pass3'])?$_POST['pass3']:'';
if($password==$password1){
	if($password2==$password3){
		$query="UPDATE student_login set PASSWORD='$password3' where email='$email'";
        $run = mysqli_query($con,$query);  
	}else{
		echo"New and confirm password mismatch";
	}
}else{
	echo "Your have entered the wrong present password";
}
?>