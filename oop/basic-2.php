<!doctype html>
<html>
<body>
<!--<form action = "basic-2.php" method = "GET">
		ID:  <input type = "text" name ="idText"/><br/>
		First Name:    <input type ="text"name ="fNameText"/><br/>
		Last Name:      <input type ="text"name ="lNameText"/><br/>
		Joining Date:   <input type ="date" name = "joinDateText"/><br/>
		Salary:    <input type ="text" name ="salaryText"/><br/>
		<input type ="submit" value ="Show Details" name ="submitButton"/>
</form> -->
<?php

	
		$id = $_GET['001'];
		$fname = $_GET['fNameText'];
		$lname = $_GET['lNameText'];
		$date = $_GET['joinDateText'];
		$salary = $_GET['salaryText'];
		echo "ID: ".$id .", Name: " .$fname." ".$lname.", Joining date: ". $date.", Salary: ".$salary;



?>

</body>
</html>