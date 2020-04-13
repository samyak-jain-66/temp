<?php
ob_start();
define('myheader',TRUE);
require('header.php');
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
  document.getElementById("alloc").style.display = "block";
  document.getElementById("realloc").style.display = "block";
  document.getElementById("drop").style.display = "none";
  document.getElementById("logout").style.display = "block";
  document.getElementById("menu-toggle").style.display = "none";
</script>
<form action="realloc_configure.php" method="post">
	<label>Enter your choice</label>
	<select name='realloc'>
		<option>Leave Hostel</option>
		<option>Change Room</option>
	</select>
	<input type="submit" value = "GO" name="submit"> 
</form>