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
        <form action=" " method="post">
            <input type="text" placeholder="username" name="u">
            <input type="password" placeholder="password" name="p">
            <input type="submit" value="submit" name="submit">
            
            
            
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            echo $_POST['u'];
            echo '<br>';
            echo $_POST['p'];
            echo '<br>';
        }
         ?>
        
    </body>
</html>
