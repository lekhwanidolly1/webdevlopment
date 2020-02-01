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
                $pass=$_POST['password'];
                $sql="select password from dd where username=$user";
                $res=mysqli_query($conn,$sql);
                if(mysqli_num_rows($res))
                {
                    $s=  mysqli_fetch_assoc($res);
                    if($x['password']===$pass)
                    {
                        echo 'you have successfully login';
                    }
 else {
     header("location:dox.php");
 }
                }  else {
                    header("location:dox.php");
                }
            }
        }
        // put your code here
        ?>
    </body>
</html>
