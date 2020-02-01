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
          $img=$_FILES['image'];
          echo "fill name is".$img['name']."<br>";
           echo "fill size is".$img['size']."<br>";
            echo "fill dir is".$img['tmp_name']."<br>";
             echo "fill type is".$img['type']."<br>";
             move_uploaded_file($img['tmp_name'],"img".$img['name']);
      
        }        
        // put your code here
        ?>
    </body>
</html>
