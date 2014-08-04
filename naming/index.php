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
        require_once 'person.php';
        $person = new Person();
        $person->first_name = 'Sanjib';
        $person->middle_name = 'Kumar';
        $person->last_name = 'Saha';
        
        echo $person->get_full_name().'<br/>';
        echo $person->get_reverse_name();
        
        ?>
    </body>
</html>
