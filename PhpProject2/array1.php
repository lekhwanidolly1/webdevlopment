<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$x=["dolly"=>"8 sep","jyoti"=>"20 aprel"];
print_r($x);
?>
<br>
<br>
<?php
$x=[[1,2],[3,4],['dddd','lekh']];
for($i=0;$i<sizeof($x);$i=$i+1)
{
 for($j=0;$j<sizeof($x); $j=$j+1)
 {
    echo $x[i][j];
 }
 echo '<br>';
}



?>