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
    <div class="container d-flex justify-content-center  shadow-lg qn2Body bg-white rounded">
        <div >
            <form class="formQn2" method="post" action="store_detail.php">
                <div class="card-heading text-center">
                    <h1 class="title pb-2">Questionaire</h1>
                    <hr>
                    <h3 class="title pb-2">Other Questions*</h3>
                </div>
                <div class="form-group row">
                    <label for="startidea" class=" col-form-label qn2">What do you expect from C-Suites? What are the key resources that will be needed for your startup?</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="othQn1" name="othQn1" rows="2"></textarea>
                </div>
                <div class="form-group row">
                    <label for="startidea" class=" col-form-label qn2">Ever Collaborated with another Startup?</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="othQn2" name="othQn2" rows="1"></textarea>
                </div>
                <div class="form-group row">
                    <label for="startidea" class=" col-form-label qn2">How many Startups do you know from VNIT?</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="othQn3" name="othQn3" rows="1"></textarea>
                </div>
                <div class="form-group row">
                    <label for="startidea" class=" col-form-label qn2">Would you recommend name of any other Startup that should be included in the community?</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="othQn4" name="othQn4" rows="1"></textarea>
                </div>



                <center>
                <button class="next btn btn-danger rounded-pill align-items-center" type="submit" name="submitBut" value="SUBMIT">Submit</button>
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
