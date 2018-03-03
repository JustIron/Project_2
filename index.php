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
           $pole = array(3500, 2800, 1280, 1920, 4320);
           $prumer = array_sum($pole) / count($pole);
           $odchylka = $prumer - $pole [2];
           echo("Cena 3. produktu se od průměru liší o " . $odchylka . " kč");
        ?>
    </body>
</html>
