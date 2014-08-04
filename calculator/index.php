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
                <legend>Online Calculator</legend>
                <label>Number-1: </label>
                <input type="text" name="num1Text"/><br/>
                <label>Number-2: </label>
                <input type="text" name="num2Text"/><br/>
                <input type="submit" name="sumButton" value="Sum"/>
                <input type="submit" name="mulButton" value="Multiply"/>
                <input type="submit" name="subButton" value="Subtract"/>
                <input type="submit" name="divButton" value="Division"/>
                <input type="submit" name="modButton" value="MOD"/>
            </fieldset>
        </form>
        
        
        <?php
        
            require_once 'calculator.php';
            $calculator = new Calculator();
            
            if(isset($_GET['sumButton']))
            {
                
                $calculator->num1 = $_GET['num1Text'];
                $calculator->num2 = $_GET['num2Text'];
                echo $calculator->Add();
                                
            }
            
            if(isset($_GET['divButton']))
            {
                
                $calculator->num1 = $_GET['num1Text'];
                $calculator->num2 = $_GET['num2Text'];
                echo $calculator->Division();
                                
            }
            
            if(isset($_GET['mulButton']))
            {
                
                $calculator->num1 = $_GET['num1Text'];
                $calculator->num2 = $_GET['num2Text'];
                echo $calculator->Multiply();
                                
            }
            
            if(isset($_GET['subButton']))
            {
                
                $calculator->num1 = $_GET['num1Text'];
                $calculator->num2 = $_GET['num2Text'];
                echo $calculator->Subtract();
                                
            }
            
            if(isset($_GET['modButton']))
            {
                
                $calculator->num1 = $_GET['num1Text'];
                $calculator->num2 = $_GET['num2Text'];
                echo $calculator->Mod();
                                
            }
            
                   
        ?>
    </body>
</html>
