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
        if(isset($_POST['submit']))
        {
         $user="dolly";
         $pass="1234";
         
         if($user===$_POST['u']&& $pass===$_POST['p'])
         {
             header("location:get3.php");
         }
         else{
             header("location:get.php");
         }
            
        }
        else{
            echo header("location:get.php");
        }
        // put your code here
        ?>
    </body>
</html>
