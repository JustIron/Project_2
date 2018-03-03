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
          $zameni = array ("krysy", "buvola", "tygra", "zajice", "draka", "hada", "koně", "kozy", "ovce", "opice", "kohouta", "psa");
          
          
          $rok = "date('Y');
          
          $aktualniZnameni = $znameni ($rok - 2014);
          echo("Dnešní rok je ve znameni" . $aktualniZnameni);
          echo($rok);
          
        ?>
    </body>
</html>
