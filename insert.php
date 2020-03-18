<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$firstname=$_REQUEST['firstname'];
$middlename=$_REQUEST['middlename'];
$lastname=$_REQUEST['lastname'];
$gender= isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
$phone_Number=$_REQUEST['phone_Number'];
$email=$_REQUEST['email'];
$psw=$_REQUEST['psw'];
$psw_repeat=$_REQUEST['psw_repeat'];

  $host="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbname="passport_system";

  $conn=new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if(mysqli_connect_error()) {
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
  } else {
  //  $SELECT ="SELECT email FROM registrationn where email= ? Limit=1";
    //$sql = "INSERT into registrationn (firstname,middlename,lastname,gender,phone_Number,email,psw,psw_repeat) values(?,?,?,?,?,?,?,? )";

    //prepare Statement
//    $stmt = $conn->prepare($SELECT);
  //  echo mysqli->error;
//    $stmt->bind_param("s",$email);
  //  $stmt->execute();
  //  $stmt->bind_result($email);
  //  $stmt->store_result();
  //  $rnum=$stmt->num_rows;

    //if($rnum==0)
    //{
    //  $stmt->close();
    //  $stmt=$conn->prepare($INSERT);
    //  $stmt->bind_param("sssssisss",$firstname,$middlename,$lastname,$bday,$gender,$phone_Number,$email,$psw,$psw_repeat);
    //  $stmt->execute();
    //  echo "you are registered successfully";
    //}
    //else {
    //  echo "someone have already registered using this email";
    //  }
    //  $stmt->close();
    //  $conn->close();

//}
//}
//else {
//  echo "all fields are required";
//  die();
//}
  $sql = "INSERT Into registrationn (firstname,middlename,lastname,gender,phone_Number,email,psw,psw_repeat) values('$firstname','$middlename','$lastname','$gender','$phone_Number','$email','$psw','$psw_repeat' )";
  $res=mysqli_query($conn,$sql);
  if($res)
  {
  echo "Record successfully inserted";
  }
  else
  {
  echo "There is some problem in inserting record";
  }

  }

 ?>
