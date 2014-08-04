<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="GET">
            <fieldset> 
                <legend>Circle Area Calculator</legend>
                <label>Radius </label>
                <input type="text" name="radiusText"/><br/>
                
                <input type="submit" name="diameterButton" value="Diameter"/>
                <input type="submit" name="perimeterButton" value="Perimeter"/>
                <input type="submit" name="areaButton" value="Area"/>
                
            </fieldset>
        </form>
        
        <?php
        require 'calculator.php';
        $calculator = new Calculator;
        
        if(isset($_GET['diameterButton']))
        {
            $calculator->radius = $_GET['radiusText'];
            $result = $calculator->get_diameter();
            echo "Diameter is $result";
        }
        
        if(isset($_GET['areaButton']))
        {
            $calculator->radius = $_GET['radiusText'];
            $result = $calculator->get_area();
            echo "Area is $result";
        }
        
        if(isset($_GET['perimeterButton']))
        {
            $calculator->radius = $_GET['radiusText'];
            $result = $calculator->get_perimeter();
            echo "Perimeter is $result";
        }
        
        
        ?>
    </body>
</html>
