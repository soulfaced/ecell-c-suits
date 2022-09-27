<?php

session_start();
// error_reporting(E_ALL);
//   ini_set('display_errors', '1');
require_once('mailing.php');


if(isset($_POST['submit']))
{
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "queries_csuits";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $message = $_POST['message'];
//  $startdesc = $_POST['startdesc'];
//  $leaderid = $_POST['leaderid'];
//  $leaderrollno = $_POST['leaderrollno'];

  // $_SESSION['leader_name'] = $name[0];

//  for($i=0;$i<count($name);$i++)
//  {
  // if($name!="" && $age!="" && $job!="")
  // {
    // echo $name[$i];
    // echo $age[$i];
    // echo $job[$i];
    // $_SESSION['leader_email'] = $job[0];
   $sql = "INSERT INTO table1 (name, email, phone, message) VALUES ('$name', '$email', '$phone','$message')";
   if ($conn->query($sql) === TRUE) {
     $s = "Welcome to C-Suites";
    //  $sent = htmlMail($job[0],$s,$name[0],'', '');
    //  if($sent){
       header('LOCATION:thanks.php');}
    //  }
  else {
       header('LOCATION:index.php');
       echo("Error description: " . mysqli_error($conn));
     }
    //header('LOCATION:thanks.php?name='.$name[0]);
  // } else {
  //   echo "Error:" . $sql . "<br>" . $conn->error;
  // }
  // }
//  }

}
?>
