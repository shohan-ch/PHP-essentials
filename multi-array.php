<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
echo "<h3>Multidimensional array are following</h3>";

 $cars = array(
     array("bolovo",12,20),
     array("mercedez",20,30),
     array('bmw',0,100)
 );




 for($i=0;$i<3;$i++){
     echo $i;

     echo"<ul>";
     for($j=0;$j<3;$j++){
         echo $cars[$i][$j]."<br>";
     }
     echo"</ul>";
     
 }


?>



<!-----------------------------------------Multidimensional associatives array------------------------------------------------------------>

<h2>Multi dimensional associative arrays.................</h2>
<?php



$Fees = array(
    "rumel" => array("php"=>20,"java"=> 50,"c#" =>10),
    "mish"  => array("html"=> 10,"boot"=>1,"css"=> 0)
);


echo $Fees ["rumel"] ["php"];





?>


<?php

$arr =array(
    array(5,10,10,55,1),
    array(10,11,55,44,55),
    array(5,10,10,55,1),
    array(10,11,55,44,55),
    array(5,10,10,55,1)
  
);


for($i=0; $i< 5; $i++){

    for($j = 0;$j<5;$j++){

        


    }





}


?>

    
</body>
</html>