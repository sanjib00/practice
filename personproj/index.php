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
        <?php
        require 'person.php';
        $a_person = new Person("John", "Felix", "Anthony");
        //$a_person->set_first_name("Kuddus");
        //$a_person->set_middle_name("Mofiz");
        //$a_person->set_last_name("Mokles");
        
        echo $a_person->get_full_name();
        echo "<br/>";
        echo $a_person->get_reverse_name();
        
        ?>
    </body>
</html>
