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
        $date=getdate();
        echo $date['month']."<br>";
           echo $date['weekday']."<br>";
              echo $date['year']."<br>";
                 echo $date['mon']."<br>";
                    echo $date['mday']."<br>";
                       echo $date['hours']."<br>";
           echo $date['minutes']."<br>";
              echo $date['seconds']."<br>";
        // put your code here
        ?>
    </body>
</html>
