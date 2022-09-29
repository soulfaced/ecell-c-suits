<?php

session_start();
// error_reporting(E_ALL);
//   ini_set('display_errors', '1');
require_once('mailing.php');


if(isset($_POST['submit']))
{
 $servername = "localhost";
 $username = "ias2020";
 $password = "ecell123";
 $dbname = "csuites";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

 $startupidea=$_POST['startupidea'];
 $leaderid=$_POST['leaderid'];
 $leaderrollno=$_POST['leaderrollno'];
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $groupsize = $_POST['groupsize'];



 $linkedinProfile = $_POST['linkedinProfile'];
 $leaderCV = $_POST['leaderCV'];
 $webLink = $_POST['webLink'];
 $socialHandles = $_POST['socialHandles'];
 $typeOfComp = $_POST['typeOfComp'];
 $detailsMentor = $_POST['detailsMentor'];
 $officeAddress = $_POST['officeAddress'];
 $registration = $_POST['registration'];


 $valueP1 = $_POST['valueP1'];
 $valueP2 = $_POST['valueP2'];
 $valueP3 = $_POST['valueP3'];
 $valueP4 = $_POST['valueP4'];
 $revenue1 = $_POST['revenue1'];
 $revenue2 = $_POST['revenue2'];
 $market1 = $_POST['market1'];
 $market2 = $_POST['market2'];


 $bplan1 = $_POST['bplan1'];
 $bplan2 = $_POST['bplan2'];
 $stage1 = $_POST['stage1'];
 $stage2 = $_POST['stage2'];
 $stage3 = $_POST['stage3'];
 $partners1 = $_POST['partners1'];
 $partners2 = $_POST['partners2'];


 $othQn1 = $_POST['othQn1'];
 $othQn2 = $_POST['othQn2'];
 $othQn3 = $_POST['othQn3'];
 $othQn4 = $_POST['othQn4'];

 $checkUser = "SELECT * FROM csuites_data where phone = '$phone'";
    $result = mysqli_query($conn, $checkUser);
    $count = mysqli_num_rows($result);
    if($count>0){
      header('LOCATION:success.php');
    }






$sql = "INSERT INTO csuites_data (startupidea, leaderid, leaderrollno, name, phone, email, groupsize, linkedinProfile, leaderCV, webLink, socialHandles, typeOfComp, detailsMentor, officeAddress, registration, valueP1, valueP2, valueP3, valueP4, revenue1, revenue2, market1, market2, bplan1, bplan2, stage1, stage2, stage3, partners1, partners2, othQn1, othQn2, othQn3, othQn4) VALUES ('$startupidea', '$leaderid', '$leaderrollno', '$name', '$phone', '$email', '$groupsize','$linkedinProfile','$leaderCV', '$webLink', '$socialHandles', '$typeOfComp', '$detailsMentor', '$officeAddress', '$registration', '$valueP1','$valueP2','$valueP3','$valueP4', '$revenue1', '$revenue2', '$market1','$market2', '$bplan1', '$bplan2', '$stage1', '$stage2', '$stage3', '$partners1', '$partners2', '$othQn1', '$othQn2', '$othQn3', '$othQn4')";
   if ($conn->query($sql) === TRUE) {
    //  $s = "Welcome to C-Suites";
    //  $sent = htmlMail($job[0],$s,$name[0],'', '');
    //  if($sent){
       header('LOCATION:thanks.php');}
      //  echo "hello";
     }
  else {
      //  header('LOCATION:index.php');
       echo("Error description: " . mysqli_error($conn));
     }
    //header('LOCATION:thanks.php?name='.$name[0]);
  // } else {
  //   echo "Error:" . $sql . "<br>" . $conn->error;
  // }
  // }
//  }

// }
?>
