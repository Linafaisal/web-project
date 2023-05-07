<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $name='lina';
        $n2='faisal';
        $name = &$n2;
        echo "Hello $name";
       $name='l';
        echo "Hello $n2";
         echo "Hello $name";
        ?>
    </body>
</html>
