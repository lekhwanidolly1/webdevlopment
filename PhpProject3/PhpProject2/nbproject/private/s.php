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
                $sql="insert into dd(username,password)values('$user','$pass')";
                $res=mysqli_query($conn,$sql);
                if($res)
                {
                    echo 'sucessfully data inserted';
                }
 else {
                    echo 'sumthing wrong';
 }
            }
        }
        
        // put your code here
        ?>
    </body>
</html>
