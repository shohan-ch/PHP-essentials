<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>




    <style>

        form{
            margin-left: 30px;
        }

        span{
            color: red;
        }
    
    
    
    
    </style>







</head>
<body>




<!----------------------------------------------Php code------------------------------------------>

<?php

//---------------------Define variables with empty value-------------
$name = $mobile = $email = $gender = $pass = "" ;

//----------------------Define variables foe error Message------------

$name_err = $mobile_err = $email_err = $gender_err = $pass_err = "";


if($_SERVER['REQUEST_METHOD'] == "POST"){



    if(empty($_POST['name'])){
        $name_err = "Require a name";
    }
   
    elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST['name'])){
        $name_err = "Invalid User name type";


    }
    else{
        $name = my_form($_POST['name']);
    }


    if(empty($_POST['email'])){

        $email_err = "Require an email";

    }
   
    elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $email_err = "Invalid email";
    }

    else{
        $email = my_form($_POST['email']);
    }

    if(empty($_POST['mobile'])){

        $mobile_err = "Require a mobile number";

    }
    

    elseif(!preg_match('/^[0-9]{11}+$/', $_POST['mobile'])){
        $mobile_err="Mobile number invalid";
    }

    else{
        $mobile = my_form($_POST['mobile']);
    }



    if(empty($_POST['gender'])){

        $gender_err="Select a gender";

    }
    else{
        $gender = my_form($_POST['gender']);

    }

    if(empty($_POST['pass'])){

        $pass_err ="Choose passwords";

    }

    elseif(empty($_POST['con_pass'])){
        $pass_err ="Choose passwords";
    }
    elseif($_POST['pass'] != $_POST['con_pass'] ){
        $pass_err ="Oops! dosen't match passwords";
    }

    else{
        $pass = my_form($_POST['pass']);
    }








}






?>





<?php
  function my_form($data){


    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;


  }










?>




<!----------------------------------------------Html Form / Html code ------------------------------->
<h3 style="margin-left:500px;">User <strong>sign up</strong> medical form</h3>



<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">



<p>

 <label for="name">Name :</label>
 <input type="text" name="name" value=" <?php echo $name;?>">
 <span>* <?php echo $name_err;?></span>


</p>



<p>

<label for="Email">Email :</label>
<input type="email" name="email" value="<?php echo $email;?>">
<span>* <?php echo $email_err;?></span>


</p>


<p>

<label for="Mobile">Mobile Number :</label>

<input type="tel" name="mobile" value="<?php echo $mobile;?>">
<span>* <?php echo $mobile_err;?></span>

</p>


<p>

<label for="gender">Gender :</label>

<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<span>* <?php echo $gender_err;?></span>

</p>


<p>
<label for="Password">Password :</label>

<input type="password" name="pass" value="<?php echo $pass;?>">

<span></span>



</p>

<p>

<label for="Confirm Password">Confirm Password</label>
<input type="password" name="con_pass" value="<?php echo $pass;?>">

<span>* <?php echo $pass_err;?></span>
</p>


<button type="submit">Sign Up</button>

</form>













<?php


echo"<h3>Form input values</h3>";

echo"Name :".$name."<br>";
echo"Email :".$email."<br>";
echo"Mobile :".$mobile."<br>";
echo"Gender :".$gender."<br>";
echo"Confarm pass :".$pass."<br>";






?>


















    
</body>
</html>