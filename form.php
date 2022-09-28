<?php
session_start();

if(isset($_POST['submit_member']))
{
    $mem = $_POST['SIZE'];

}
else{
    $mem = 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | C-Suites</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- external css  -->
    <link rel="stylesheet" href="formStyle.css">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- icons -->
    <link rel = "icon" href = "images/icon.png" type = "image/x-icon">
</head>
<body>
    <div class="container d-flex justify-content-center pt-3 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="row">
            <form class="p-4" method="post" action="store_detail.php">
                <div class="card-heading text-center">
                    <h1 class="title pb-2">Registration</h1>
                    <hr>
                </div>
                <div class="form-group row">
                    <label for="startidea" class="col-md-4 col-form-label">Startup Idea (Name)</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control auto-save rounded-pill" id="startidea" name="startidea" placeholder="Startup Name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="startdesc" class="col-md-4 col-form-label">Leader ID</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control auto-save rounded-pill" id="leaderid" name="leaderid" placeholder="Leader ID" required>
                        <small class="form-text">Please enter student ID of the Institute(VNIT).</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="startdesc" class="col-md-4 col-form-label">Leader Roll number</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control auto-save rounded-pill" id="leaderrollno" name="leaderrollno" placeholder="Leader Roll number" required>
                        <small class="form-text">Please enter Roll number of the Institute(VNIT).</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name[]" class="col-md-4 col-form-label">Leader Name</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control auto-save rounded-pill" id="name" name="name" placeholder="Leader Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="age[]" class="col-md-4 col-form-label">Leader Phone Number</label>
                    <div class="col-md-8">
                        <input type="number" class="form-control auto-save rounded-pill" id="phone" name="phNum" placeholder="Leader Phone Number" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="job[]" class="col-md-4 col-form-label">Leader Email</label>
                    <div class="col-md-8">
                        <input type="email" class="form-control auto-save rounded-pill" id="leaderemail" name="leaderEmail" placeholder="Leader Email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="job[]" class="col-md-4 col-form-label">Group Size</label>
                    <div class="col-md-8">
                        <input type="number" class="form-control auto-save rounded-pill" id="groupsize" name="groupSize" placeholder="Number of members in the team" required>
                    </div>
                </div>
              
                <!-- <br>
                    <div class="form-group row">
                        <p style="color: white;"><?php echo "Team member " . $i; ?></p>
                        <input class="form-control auto-save rounded-pill" type="text" name="name[]" placeholder="Enter Name" required>
                        <input class="form-control auto-save rounded-pill mt-2" type="number" name="age[]" placeholder="Enter Phone Number" required>
                        <input class="form-control auto-save rounded-pill mt-2" type="email" name="job[]" placeholder="Enter Email" required>
                    </div> -->

                <center>
                    <a href="questionaire1.php">
                        <span class="btn btn-danger rounded-pill align-items-center" >NEXT</span>
                    </a>                
                </center>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="savy.min.js"></script>
    <script type="text/javascript">

    //$('.auto-save').savy('load') --> can be used without callback
    $('.auto-save').savy('load',function(){
    console.log("All data from savy are loaded");
    });

    function dstry(){
    //$('.auto-save').savy('destroy') --> can be used without callback
    $('.auto-save').savy('destroy',function(){
        console.log("All data from savy are Destroyed");
        window.location.reload();
    });
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
