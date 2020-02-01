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
        setcookie('username','dolly',time()+200);
         setcookie('password','5555',time()+200);
        if($_COOKIE['username'])
        {
            echo 'thanku for return to my webside';
        }
        // put your code here
        ?>
    </body>
</html>
