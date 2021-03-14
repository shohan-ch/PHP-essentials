<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <style>

        span{

            color:red;
        }
    
    </style>
</head>
<body>


<!-----------------------------------------------------------------------------$POST[]---------------------------------------------------

-------------------------------------$POST[] Also USED TO COLLECT DATA FROM A FORM--------------------------------------------------------------->



<!-----------------------------------form validiation in php------------------------------------------------------------------------->




<?php
//----------------------define variables and set to empty values

            $name = $email = $url =  $gender = $textarea ="";
//----------------------define variable for error message with empty values
            $name_err = $email_err = $url_err = $gender_err = "";  

                if($_SERVER['REQUEST_METHOD'] == 'POST'){


                   
                    $name       = my_form($_POST['name']);
                    $email      = my_form($_POST['mail']);
                    $url        = my_form($_POST['url']);
                    $textarea   = my_form($_POST['textarea']);
                    $gender     =my_form($_POST['gender']);
                     


                    if(empty($name)){
                        $name_err = "Name is require";
                    }
                    else{
                        $name;
                    
                    }
                    if(!preg_match("/^[a-zA-Z ]*$/",$name)){
                        $name_err = "Only letter and white space allow";

                    }
                    if(empty( $email)){
                        $email_err = "Email is required";
                    }
                    else{
                        $email;
                    }

                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $email_err ="Invalid email format";

                    }

                    if(empty($url)){
                        $url_err ="";
                    }
                    else{
                        $url;
                    }
    
                    if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)){
    
                        $url_err="Invalid url";
                    }



                    if(empty($gender)){
                        $gender_err = "Select a gender";
                    }
                    else{
                        $gender;
                    }



                }


                function my_form($data){

                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);

                    return $data;



                }



?>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">


<p> <label for="name">Name :</label>
    <input type="text" name="name" value="<?php echo $name?>">
    <span>* <?php echo $name_err;?></span>
   

</p>
    <label for="Email">Email :</label>
     <input type="email" name="mail" value="<?php echo $email?>">
     <span>* <?php echo $email_err;?></span>

</p>

<p>
<label for="website">Website :</label>
<input type="url" name="url" value="<?php echo $url?>">
<span>* <?php echo $url_err?></span>

</p>

<p>  

<label for="textarea">Comment :</label>
<textarea name="textarea" id="" cols="30" rows="10">
    <?php echo $textarea;?>


</textarea>



</p>

<p>
    <label for="Gender">Gender :</label> 
    
    <input type="radio" name="gender" <?php if(isset($gender) && $gender ="Female") echo "Checked";?> value="Female" >Female
    <input type="radio" name="gender"<?php if(isset($gender) && $gender = "Male") echo "Checked";?>  value="Male">Male
     <span>* <?php echo $gender_err;?></span>
   


</p>

<button type="submit">Submit</button>


</form>

<?php

echo"<h2>User Input</h2>";
echo"<br>";
echo"<br>";
echo "Name is : ",$name;
echo "<br>";
echo "Email is : ".$email;
echo "<br>";
echo "Gender is :".$gender;
echo "<br>";
echo "Website is :".$url;

echo "<br>";
echo $textarea;

echo "<br>";
echo "<br>";
echo "<br>";

?>


    
</body>
</html>





















