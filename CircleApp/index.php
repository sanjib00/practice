<html>

<body>

<form action = "index.php" method = "GET">

Radius of Circle:<input type = 'text' name = 'radiusText'> <br />

<input type = "submit" value = "Area" name = 'submitButtion'><br />


</form>	
<?php
require 'circle.php';
if(isset($_GET['submitButtion']))
{
$a_circle = new Circle();
$a_circle->radius = $_GET['radiusText'];

$circle_area= $a_circle->get_circle_area();

echo "Area: ". $circle_area;	

}
?>

</body>
</html> 