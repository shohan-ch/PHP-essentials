<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<p style="text-align:center;">PHP Tutorial</p>



<div style="font-size:22px; margin:0 70px;">


<?php

//      ------------------ ----------  Gloval Variable Declared outside a function-------------------------- 

$x = 5;
function my(){


    echo "<p>variable will not print inside the function</p>";

}

my();

echo "The Variable is $x";


?>





<?php
//--------------------------------Local Variable declared inside a function ------------------------------    

function test(){


    $Z= 10;


    echo "<p> 1St Local varaible is $Z </p>";

}
test();




function dot(){


    $z = 10;

    echo"<p> 2nd Local Varaible is $z </p>";


}
dot();




?>




 <?php  

 ///------------------------ Gloval variable declare with gloval keyword-------------------------

 $x  = 10;
 $y = 5;



 function go(){

    global $x,$y;

    $x=$x+$y;


 }

 go();
 echo "The Output is".$x;


  ?>

 <?php


//--------------------------- Globals variable with [global array]---------------------


$x = 2;
$y = 3;
$z = 4;

function mik(){


    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'] * $GLOBALS['z'];


}

mik();


echo "<p>The Global Array result is $z </p> ";




//-------------------------------------------------Static Variable------------------------------


function doco(){

    static $x = 10;

    echo $x;

    $x++;

}

doco();
echo "<br>";
doco();
echo"<br>";
doco();
echo"<br>";




/*---------------------------------------------Constant (Like Varaible) --------------------------------------------

---------------------Example Of Constant of array-------------------------
-------------------For constant used to  difine() built in function-------------
*/

define("Cars",["bmw","Toyota","marcedez"],true);


echo "<p>My car name is ".cars[0]."</p>";







//------------------------------  Example of Variable Of arrays------------------------


$cars = array("Tata","Honda","Raum");
print "I Also Have".cars[1];



function mydo(){

    echo "<br>".cars[0]."</br>";


    echo"<br>";



}
mydo();




/*-------------------------------------------------------Tenary Operator/ Conditional assignment operator--------------------------
Tenary Operator (Condition ? expression1 : expression 2) Are alternative Of If and Else Conditions--------------------*/




echo $result =(empty($user)) ? "Anonymous": "Logged In";
echo ("<br>");


$user="Jhon Doe";

echo $result = (empty($user)) ? "Anonymous" : "Logged In";
echo"<br>";






/*-------------------------------------------------------Null coalescing Operator(??)   are alternative of tenary operator---------------------------*/

// variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   $y="yellow";
   echo $color = $y ?? "red";
   echo"<br>";






//-----------------------------------------------------While and Do while loop-------------------------



$x = 10;
while($x <= 15){

    echo "The Number is $x <br>";
    $x++;

};


echo"<br>";





$x= 1;
do{
    print "the number is $x <br>";
    $x++;
}while($x <= 5);



//---------------------------------------------------------For Loop --------------------------------



for($i=0;$i<=10;$i++){
    echo $i."<br>";
}



echo "<p>--------------------------------------------------------The functions start-------------------------------------------------------------------- ------------- </p>";




    function msg($fname,$lname){

        echo "Student name is $fname $lname <br>";

    
    }
    msg("shohan","chowdhury");
    msg("Mishu","ZBOnds");
    msg("mak","Mos");
    msg("odu","omit");
    msg("piku","vash");






    //------------------------------------return Value-----------------------------

    function ret_msg($a,$b){

        return $a+$b;

    }
    echo "100 + 500 =" .ret_msg(100,500)."<br>";

    echo"<br>";
    
    


    // ---------------------------------------associative arrays---------------------------------------------------



    $name = array("first" => "sabbir","second" => "Opy","third" => "jamal");

  foreach($name as $key => $values){
      echo  $key. " Customer name is ".$values."<br>";
  }

  echo"<br>";






//--------------------------------------------------------Super Global function Starts ---------------------------------------

//------------------------------------------------------------------------------$_SERVER[]----------------------------------------------------------


  ECHO $_SERVER['PHP_SELF'];

  echo "<br>";
  echo $_SERVER['SERVER_ADDR'];
  echo "<br>";

  echo $_SERVER['SERVER_NAME'];
  echo "<br>";

  echo $_SERVER['SERVER_SOFTWARE'];
  echo "<br>";

  echo $_SERVER['REQUEST_METHOD'];
  echo "<br>";

  echo $_SERVER['HTTP_HOST'];
  echo "<br>";
 echo  $_SERVER['REMOTE_ADDR'];
 echo "<br>";
echo  $_SERVER['HTTP_REFERER'];
echo"<br>";


echo"<p>Returns the version of the Common Gateway Interface (CGI) the server is using</p>";
echo $_SERVER['GATEWAY_INTERFACE'];
echo"<br>";


?>


<!-----------------------------------------------------------------------------$_REQUEST[]---------------------------------------------------

-------------------------------------$_REQUEST[] USED TO COLLECT DATA FROM A FORM--------------------------------------------------------------->

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">


<label for="First name">First Name</label>
<input type="txt" name="fname">
<label for="Last Name">Last Name</label>
<input type="txt" name="lname" >
<label for="Password">Password</label>
<input type="password" name="pass">
<label for="emai">Email</label>
<input type="email" name="mail">
<button type="submit">Submit</button>



</form>



<!-----------------------------------php code start from here----------------------------------------------------->
   


<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){

    $fname = htmlspecialchars($_REQUEST['fname']);
    $lname = htmlspecialchars($_REQUEST['lname']);
    $mail  = htmlspecialchars($_REQUEST['mail']);
    $pass  = htmlspecialchars($_REQUEST['pass']);
    
    
    if(empty($fname)){
        echo " Not Submitted following Requirement";

    }


   
    else{
        echo "<p>Firstname: $fname</p>";
       
    }


    if(empty($lname)){
        echo " Not Submitted following Requirement";

    }
    else{
        echo"<p>Last name: $lname</p>";
    }


    if(empty($pass)){
        echo " Not Submitted following Requirement";
    }
    else{
        echo "<p>Password is: $pass</p>";
    }

    if(empty($mail)){

        echo " Not Submitted following Requirement";

    }
    else{
        echo "<p>Email is:  $mail</p>";
    }



}



?>




<!-----------------------------------------------------------------------------$POST[]---------------------------------------------------

-------------------------------------$POST[] Also USED TO COLLECT DATA FROM A FORM--------------------------------------------------------------->










































</div>




























    
</body>
</html>