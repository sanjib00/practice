<!doctype html>
<html>
<head>
	<title>Online Registration</title>
</head>
<body>
	<form action = "index.php" method = "GET">
	<fieldset>
		<legend> Employee Registration:</legend>
		<label> ID: </label>
			<input type = "text" name ="idText"/><br/>
		<label>Name: </label>
			<input type = "text" name = "nameText"/><br/>
		<label>Joining Date</label>
			<input type = "date", name = "dateText"/><br/>
		<label>Salary: </label>
			<input type = "text" name = "salaryText"><br/>
			<input type = "submit" name = "showButton" value = "Show Details">
		
	</fieldset>
	</form>
	<?php
	require 'employee.php';
	
	if(isset($_GET['salaryText']))
	{
		$an_employee = new Employee();
		$an_employee->id = $_GET['idText'];
		$an_employee->name = $_GET['nameText'];
		$an_employee->join_date = $_GET['dateText'];
		$an_employee->salary = $_GET['salaryText'];
		
		echo "ID: ".$an_employee->id.", Name: ". $an_employee->name.
		", Joining Date: ". $an_employee->join_date.", and Salary: ". $an_employee->salary;
		
	}
	
	?>
	

</body>


</html>