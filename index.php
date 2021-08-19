<?php
 session_start();

  header('location:index.html');
 
 $con = mysqli_connect('localhost','root','');

 mysqli_select_db($con, 'internn');

$email = $_POST['email'];
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];

$s =" select * from internndb where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"Password is incorrect ";
}
else{
    $reg ="INSERT INTO `internndb` (`email`, `pass`, `rpass`) VALUES  ('$email','$pass','$rpass')";
    mysqli_query($con ,$reg);
    echo "Regisrtation successful";
}
?>