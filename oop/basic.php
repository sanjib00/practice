<html>
<body>
<form action = "basic.php" method = "GET">
		ID:  <input type = "text" name ="idText"/><br/>
		Name:    <input type ="text"name ="nameText"/><br/>
		Salary:    <input type ="text"name ="salaryText"><br/>
		<input type ="submit" value ="Show Value" name ="submitButton">
</form>

<?php
	if (isset($_GET['idText']) && isset($_GET['nameText']) && isset($_GET['salaryText']))
	{
		$id = $_GET['idText'];
		$name = $_GET['nameText'];
		$salary = $_GET['salaryText'];
		echo "ID: ".$id. ", Name: ".$name ." , Salary:". $salary;
	}
	

?>
</body>
</html>