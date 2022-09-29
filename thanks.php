<?php

session_start();
// include('mailing.php');


// $name = $_GET["name"];
//$name = $_SESSION['leader_email'];
$name = $_SESSION['name'];
// $to_email = $_SESSION['email'];
// $sub = "Welcome To C-Suites";
// $teamname = "";
// $event = "";

//htmlMail($to_email, $sub, $name, $teamname, $event );
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Thank You</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- external css  -->
    <link rel="stylesheet" href="css/thanks.css">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- favicon -->
    <link rel = "icon" href = "images/icon.png" type = "image/x-icon">
    </head>
  <body>
    
        <div class="">
        <div class="container d-flex align-items-center justify-content-center min-vh-100">
            <div class="row text-center">
                <div class="">
                <img src="images/vectors/rocket.svg" alt="" style="width:30vw" />
                  <?php echo "<b style=color:red> <br>Welcome to the community,<b style=color:white><br><h4>Click button below to join our Community. $name!</b></h4>";?><br>
                <button class="btn btn-danger rounded-pill justify-content-center "><a class="badge badge-danger rounded-pill" href="https://chat.whatsapp.com/KA3wsL2BBzhG30cSiHGAgX">LaunchPad</a></button>
            
                <br><br><br>
                
                  <button class="btn btn-danger rounded-pill justify-content-center "><a class="badge badge-danger rounded-pill" href="index.php">Return to Home</a></button>
                </div>
            </div>
        </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
