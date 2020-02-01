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
          $dbservername="localhost";
        $dbuser="root";
        $dbpassword="";
        $dbname="r";
        $conn=  mysqli_connect($dbservername, $dbuser, $dbpassword, $dbname);
        if($conn)
        {
            if(isset($_POST['submit']))
            {
                $user=$_POST['username'];
                $user=  mysqli_real_escape_string($conn,$user);
                echo $user;
                $sql="select*from dd where username='$user'";
                $res=  mysqli_query($conn, $sql);
                $x=  mysqli_fetch_assoc($res);
                echo $x['id'];
            }
        }
        // put your code here
        ?>
    </body>
</html>
