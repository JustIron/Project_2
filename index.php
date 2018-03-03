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
            $a = 12;
            $b = 10;
            $cm = "cm";
            $obvod = 2*($a + $b);
            $obsah = $a * $b;
            
            echo("Obsah obdelníku se stranami o délkách $a $cm a $b $cm je $obsah $cm  a obvod obdelníku je $obvod $cm  .");
        ?>
    </body>
</html>
