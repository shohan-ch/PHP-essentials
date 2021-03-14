<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <style>


        table,tr,td{
            border: 1px solid black;
            padding: 5px;
        }
    
    
    
    </style>
</head>
<body>






<?php

/*-------------------------------------------------Create data base are following

$servarname= "localhost";
$username ="root";
$password ="";


//create connection
$conn = new mysqli($servarname,$username,$password);

//check connection

if($conn->connect_error){
    die("connection failed ".$conn->connect_error);
}

//create databse
$sql ="create database my_data";

if($conn->query($sql)===true){
    echo"Data base create successfully";
}
else{
    echo"No database create".$conn->error;
}
$conn->close();

*/




/*----------------------------------------------------------------Create Table are following




$servarname ="localhost";
$username = "root";
$pass  ="";
$database ="my_data";

//create connection

$conn =  new mysqli($servarname,$username,$pass,$database);
//check connection

if($conn -> connect_error){
    die("connection error");
}


//making table on database(my_data)


$sql ="create table customers (
    id int not null,
    firstname varchar(50),
    laststname varchar(50)
)";


if($conn-> query($sql) === true){
    echo"Create table successfully";
}
else{
    echo"there is a problem in the table ".$conn->error;
}

$conn->close();

*/




/*----------------------------------------------------------------Insert data are following


$servarname = "localhost";
$user  =  "root";
$pass = "";
$database = "my_data";

//create connection  by mysqli

$conn = new mysqli($servarname,$user,$pass,$database);
//-----check connection

if($conn -> connect_error){
    die("connection fail ");
}


// insert data to table
 $sql = "insert into customers (id,firstname,laststname) values (5,'onloko','misshra'),(6,'menulo','gondu')";

 if($conn->query($sql) === true){
    
     echo "new record create succesfully";
 }
 else{
    echo "there are problems ".$conn->connect_error;
 }

 $conn-> close();

*/






/*----------------------------------------------------------------Insert data with prepared statement-----------------------------------------------------


//---------create connection
$conn = new mysqli("localhost","root","","my_data");

//check connection


if($conn->connect_error){
    die("connection fails ".$conn->connect_error);
}
//create prepare and bind statement


$stmt = $conn->prepare("insert into customers (id,firstname,laststname) values (?,?,?)");
$stmt->bind_param('iss',$id,$firstname,$lastname);

//declare values to variable

$id = 555;
$firstname = "Ontora";
$lastname = "boumik";
$stmt ->execute();

$id = 122;
$firstname = "rahat";
$lastname ="chowdhury";
$stmt-> execute();

echo"Two data insert into table";
 
echo"problem found ".$conn->error;



$stmt->close();
$conn->close();


*/





/* select data or(data view on apge )  from a table


$conn = new mysqli("localhost","root","","my_data");

//check connection

if($conn->connect_error){
    die("connection fails".$conn->connect_error);

}


$sql = "select id,firstname,laststname from customers";

$result = $conn->query($sql);

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
        echo "id".$row["id"]." name ".$row["firstname"]."  lastname  ".$row["laststname"]."<br>";
    }
}
    else{
        echo"0 result";
    }



 $conn->close();
*/


/*-------------------------------select data(view data on website) within a table------------------





//--------------create connection


$conn = new mysqli("localhost","root","","my_data");

//check connection

if($conn->connect_error){
    die("connection fails".$conn->connect_error);

}

//create sql statement for viewings values on a web page

$sql = "select id,firstname,laststname from customers";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "<table><tr> <th>Id</th> <th> Firstname</th> <th>Lastname </th> </tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["laststname"]."</td>";
       
    }
    echo"</table>";
}
else{
    echo "O result found";
}

$conn->close();


*/

/*-------------------------------------------Delete reocord from a table




//create connection

$conn =  new mysqli("localhost","root","","my_data");

//check connection 

if($conn-> connect_error){
    die("fail to connect".$conn->connect_error);
}

//---------create sql statement for delete record

$dlt = 'delete from customers where id =555';


if($conn-> query($dlt) === true){


    echo"delete succesfully id 555";

}
else{
    echo"problems found ".$conn->error;
}

$conn->close();


*/




/*-----------------------------Updated data------------------


$conn = new mysqli("localhost","root","","my_data");



//---------create update sql statement

$sql = "update customers set firstname ='Ontora',laststname = 'Boumik' where id =10";

if($conn->query($sql) === true){
    echo"Updated table";
}

else{
    echo "error",$conn->error;
}

$conn->close();

*/


$conn = new mysqli("localhost","root","","my_data");



$sql = "insert into customers (id,firstname,laststname) values (?,?,?)";


//prepard and bind function function 

$stmt=$conn->prepare($sql);
$stmt->bind_param("iss",$id,$firstname,$lastname);


$id = 100;
$firstname="chirs";
$lastname ="hemsworth";

$stmt->execute();

$id = 101;
$firstname="eden";
$lastname ="morgan";

$stmt->execute();

$stmt->close();
$conn->close();




















?>



    
</body>
</html>