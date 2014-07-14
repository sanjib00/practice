<html>

<body>

<form action = "index.php" method = "GET">

First Number:<input type = 'text' name = 'num1'> <br />
Second Number:<input type = 'text' name = 'num2'> <br/>

<input type = "submit" value = "Add" name = 'submitAdd'>
<input type = "submit" value = "Subtract" name = 'submitSub'>
<input type = "submit" value = "Multiply" name = 'submitMul'>
<input type = "submit" value = "Divide" name = 'submitDiv'>

<br />


</form>	
<?php
require 'arithmetic.php';
$input = new Arithmetic();

if(isset($_GET['submitAdd']))
{
//$input = new Arithmetic();
$input->num1 = $_GET['num1'];
$input->num2 = $_GET['num2'];

echo $input->add_numbers();

}

if(isset($_GET['submitSub']))
{
//$input = new Arithmetic();
$input->num1 = $_GET['num1'];
$input->num2 = $_GET['num2'];
echo $input->subtract_numbers();

}

if(isset($_GET['submitMul']))
{
//$input = new Arithmetic();
$input->num1 = $_GET['num1'];
$input->num2 = $_GET['num2'];
echo $input->multiply_numbers();

}
if(isset($_GET['submitDiv']))
{
//$input = new Arithmetic();
$input->num1 = $_GET['num1'];
$input->num2 = $_GET['num2'];
echo $input->divide_numbers();

}






?>

</body>
</html> 