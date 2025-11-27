<?php
$servername = "localhost";
$username = "root"; //root
$password = " "; //""



//create connection
$conn = mysqli_connect("localhost", "root", "");
//check connection
if (!$conn){
    die("Connection failed:". mysqli_connect_error());
}
echo "Connected successfully";



$database="goetel";
//create database
//$sql = "Create Database $database";
//if(mysqli_query($conn,$sql)){
//    echo"Database created successfully";
//}else{
//    echo"Error creating database:" . mysqli_error($conn);
//}



//if(mysqli_select_db($conn,$database)){
//  echo"Database $database selected";
//}else{
 //   echo"Error select database:" .
 //   mysqli_error($conn);
//}


$sql = "Create Table MyGuests(
                   id int(6) Unsigned AUTO_INCREMENT Primary Key,
                   firstname Varchar(30) Not NULL,
                   Lastname Varchar(30) Not NULL,
                   email Varchar(50),
                   reg_date TIMESTAMP DEFAULT
                     CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                   )";
//if(mysqli_query($conn,$sql)){
//    echo"table MyGuests created successfully";
//}else{
//    echo"Error creating table:" . mysqli_error($conn);
//}


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
               Values ('john', 'Doe', 'john@example.com');";
if (mysqli_query($conn, $sql)){
   echo "New record created successfully";
} else {
    echo "Error :" . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO MYGUESTS (firstname, lastname, email)
values ('Mary','Moe', 'mary@example.com');";
$sql = "INSERT INTO MYGUESTS (firstname, lastname, email)
values ('Julie','Dooley', 'Julie@example.com');";

if (mysqli_multi_query($conn,$sqli)){
    echo"New record created successfully";
} else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}

                  

