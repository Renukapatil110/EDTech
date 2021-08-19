<?php

 session_start();

 $con = mysqli_connect('localhost','root','');

 mysqli_select_db($con, 'internn');

$email = $_POST['email'];
$pass = $_POST['pass'];

$s ="SELECT * FROM `internndb` WHERE  email = '$email' &&  pass = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
   header('location:course.html');
    echo"login Successfull";
    
}
else{
    echo "login Failed";
    header('location:index.html');
}

?>