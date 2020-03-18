<?php
$host="localhost";
$user="root";
$password="";
$db="passport_system";
$conn=mysqli_connect($host,$user,$password,$db);
mysqli_select_db($conn,$db);

if(isset($_POST['uname']))
{
$sql = "select from login where Username =$uname AND Password=$psw;";
$result = mysqli_query($sql);
if(mysql_num_rows($result)==1){
header('Location:Appointment.html');
  echo "logged in";
  exit();
}
else {
  header("location:loginconnect.php?msg=invalid_username");
  exit();
}
}
?>