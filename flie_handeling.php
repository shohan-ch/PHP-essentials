<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<h2>Following code for open a file from server </h2>

<?php

$file = fopen("untitled.html",'r') or die ("File missing");
echo fread($file,filesize("untitled.html"));
echo"<br>";


fclose($file);


?>


<h2>Following code for create a file on server and file name is new.txt</h2>

<?php

$file = fopen("new.txt",'w+') or die("unable to open");
$txt ="jhon doe";
fwrite($file,$txt);
$txt ="Misu sabbir";

fwrite($file,$txt);

fclose($file)


?>

<h2>Following code for create a file on server and file name is new.html</h2>

<?php


$file = fopen("new.html",'w') or die("Unable to open");
$txt = "
<h1>
This file create by php on server
</h1>";
fwrite($file,$txt);
fclose($file);




















?>

    
</body>
</html>