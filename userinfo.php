<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "conection successful";
} 
else{
    echo "no connection";
}


mysqli_select_db($con,'bookclubdatabase');


$name = $_POST ['name'];

$email = $_POST ['email'];
$mobile = $_POST ['mobile'];
$comments = $_POST ['comments'];

$query = " insert into userinfodata (name, email, mobile, comment)
values ('$name', '$email', '$mobile', '$comments') ";

mysqli_query($con, $query);
?> 



