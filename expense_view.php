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
	<title>Expense</title>
</head>
<body>
	<h2>Select method to view Expense List</h2>
	<form action='expense_view.php' method='post'>
	<select name='choice'>
		<option>Date Wise</option>
		<option>Company Wise</option>
		<option>Related</option>
        <option>All</option>
	</select>
	<input type='submit' value='Go' method='post'>
    </form>
</body>
</html>
<?php
$choice=isset($_POST['choice'])?$_POST['choice']:'';
if($choice=='Date Wise'){
	echo"<form action='expense_view_date.php' method='post'>";
    echo"<label>Expense Date</label><input type='text' id='datepicker' name='date' /><br/>";
    echo"<input type='submit' value='Go' name='submit'>";
}else if($choice=='Company Wise'){
	     echo"<form action='expense_view_company.php' method='post'>";
       echo"<label>Company Name</label><input type='text' name='company'><br/>";
       echo"<input type='submit' value='Go' name='submit'>";
}else if($choice=='All'){
  header("location:expense_view_all.php");
}
else if($choice=='Related'){
   echo"<form action='expense_view_related.php' method='post'>";
       echo"<label>Related To</label><select name='related'><option>Food</option>
			<option>Water</option>	
			<option>Electricity</option>
			<option>Construction</option>
			<option>Equipment</option>
			<option>Stationary</option>
			<option>Others</option>
		</select><br/>";
       echo"<input type='submit' value='Go' name='submit'>";
}
?>