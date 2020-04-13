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
	   $(function () {
	    $('#datepicker1').datepicker();
	 });
</script>
</head>
<body>
	<form action="addEmployee_config.php" method="post">
		<label>Name</label>
		<input type="text" name="name"/><br/>
		<label>Gender</label>
         <select name="gender">
         	<option>Male</option>
         	<option>Female</option>
         </select>
         <br/>
         <label>EmpType</label>
         <input type="text" name="etype"/>
         <label>Date of Birth</label>
         <input type="text" id="datepicker" name="dob"/>
         <label>Phone Number</label>
         <input type="text" name="phone"/><br/>
         <label>Date of Joining</label>
		 <input type="text" id="datepicker1" name="doj"/>
		 <label>Address</label>
		 <input type="text" name="address"/>
		 <label>Salary</label>
		 <input type="text" name="salary"/>
		 <label>Designation</label>
		 <input type="text" name="des"/>
		 <input type="submit" value="GO" name="submit"/>
    </form>
</body>
</html>