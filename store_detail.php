<?php

session_start();
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

 $startupidea=mysqli_real_escape_string($conn,$_POST['startupidea']);
 $leaderid=mysqli_real_escape_string($conn,$_POST['leaderid']);
 $leaderrollno=mysqli_real_escape_string($conn,$_POST['leaderrollno']);
 $name = mysqli_real_escape_string($conn,$_POST['name']);
 $phone = mysqli_real_escape_string($conn,$_POST['phone']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $groupsize = mysqli_real_escape_string($conn,$_POST['groupsize']);



 $linkedinProfile = mysqli_real_escape_string($conn,$_POST['linkedinProfile']);
 $leaderCV = mysqli_real_escape_string($conn,$_POST['leaderCV']);
 $webLink = mysqli_real_escape_string($conn,$_POST['webLink']);
 $socialHandles = mysqli_real_escape_string($conn,$_POST['socialHandles']);
 $typeOfComp = mysqli_real_escape_string($conn,$_POST['typeOfComp']);
 $detailsMentor = mysqli_real_escape_string($conn,$_POST['detailsMentor']);
 $officeAddress = mysqli_real_escape_string($conn,$_POST['officeAddress']);
 $registration = mysqli_real_escape_string($conn,$_POST['registration']);


 $valueP1 = mysqli_real_escape_string($conn,$_POST['valueP1']);
 $valueP2 = mysqli_real_escape_string($conn,$_POST['valueP2']);
 $valueP3 = mysqli_real_escape_string($conn,$_POST['valueP3']);
 $valueP4 = mysqli_real_escape_string($conn,$_POST['valueP4']);
 $revenue1 = mysqli_real_escape_string($conn,$_POST['revenue1']);
 $revenue2 = mysqli_real_escape_string($conn,$_POST['revenue2']);
 $market1 = mysqli_real_escape_string($conn,$_POST['market1']);
 $market2 = mysqli_real_escape_string($conn,$_POST['market2']);


 $bplan1 = mysqli_real_escape_string($conn,$_POST['bplan1']);
 $bplan2 = mysqli_real_escape_string($conn,$_POST['bplan2']);
 $stage1 = mysqli_real_escape_string($conn,$_POST['stage1']);
 $stage2 = mysqli_real_escape_string($conn,$_POST['stage2']);
 $stage3 = mysqli_real_escape_string($conn,$_POST['stage3']);
 $partners1 = mysqli_real_escape_string($conn,$_POST['partners1']);
 $partners2 = mysqli_real_escape_string($conn,$_POST['partners2']);


 $othQn1 = mysqli_real_escape_string($conn,$_POST['othQn1']);
 $othQn2 = mysqli_real_escape_string($conn,$_POST['othQn2']);
 $othQn3 = mysqli_real_escape_string($conn,$_POST['othQn3']);
 $othQn4 = mysqli_real_escape_string($conn,$_POST['othQn4']);

    $checkUser = "SELECT * FROM csuites_data where phone = '$phone'";
    $result = mysqli_query($conn, $checkUser);
    $count = mysqli_num_rows($result);
    if($count>0){
      header('LOCATION:success.php');
    }


else{
$sql = "INSERT INTO csuites_data (startupidea, leaderid, leaderrollno, name, phone, email, groupsize, linkedinProfile, leaderCV, webLink, socialHandles, typeOfComp, detailsMentor, officeAddress, registration, valueP1, valueP2, valueP3, valueP4, revenue1, revenue2, market1, market2, bplan1, bplan2, stage1, stage2, stage3, partners1, partners2, othQn1, othQn2, othQn3, othQn4) VALUES ('$startupidea', '$leaderid', '$leaderrollno', '$name', '$phone', '$email', '$groupsize','$linkedinProfile','$leaderCV', '$webLink', '$socialHandles', '$typeOfComp', '$detailsMentor', '$officeAddress', '$registration', '$valueP1','$valueP2','$valueP3','$valueP4', '$revenue1', '$revenue2', '$market1','$market2', '$bplan1', '$bplan2', '$stage1', '$stage2', '$stage3', '$partners1', '$partners2', '$othQn1', '$othQn2', '$othQn3', '$othQn4')";
   if ($conn->query($sql) === TRUE) {
       header('LOCATION:thanks.php');
      }
  else {
      //  header('LOCATION:index.php');
       echo("Error description: " . mysqli_error($conn));
     }
  }
}
?>
