<html>
<head>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
	   $(function () {
	    $('#datepicker').datepicker();
	 }); 
    </script>
	<title>view attendance</title>
</head>
<body>
	<h2>Select method to view Payment List</h2>
	<form action='vendor_payment_list.php' method='post'>
	<select name='choice'>
		<option>Date Wise</option>
		<option>Company Wise</option>
    <option>All</option>
	</select>
	<input type='submit' value='Go' method='post'>
    </form>
</body>
</html>
<?php
$choice=isset($_POST['choice'])?$_POST['choice']:'';
if($choice=='Date Wise'){
	echo"<form action='vendor_payment_date.php' method='post'>";
    echo"<label>Attendance Date</label><input type='text' id='datepicker' name='date' /><br/>";
    echo"<input type='submit' value='Go' name='submit'>";
}else if($choice=='Company Wise'){
	     echo"<form action='vendor_payment_company.php' method='post'>";
       echo"<label>Company Name</label><input type='text' name='company'><br/>";
       echo"<input type='submit' value='Go' name='submit'>";
}else if($choice=='All'){
  header("location:vendor_payment_all.php");
}
?>