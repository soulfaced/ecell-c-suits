<?php
session_start();

if(isset($_POST['submit']))
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
        <div  class="row form-display">
            <form id="registration_form" action="store_detail.php"  method="post">
        <fieldset style="width:90%; margin:auto;" >
        <div class="card-heading text-center">
                    <h1 class="title pb-2">Registration</h1>
                    <hr>
                </div>
                <div class="form-group row">
                    <label for="startupidea" class="col-md-4 col-form-label">Startup Idea (Name)</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control auto-save rounded-pill" id="startupidea" name="startupidea" placeholder="Startup Name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="leaderid" class="col-md-4 col-form-label">Leader ID</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control auto-save rounded-pill" id="leaderid" name="leaderid" placeholder="Leader ID" required>
                        <small class="form-text">Please enter student ID of the Institute(VNIT).</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="leaderrollno" class="col-md-4 col-form-label">Leader Roll number</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control auto-save rounded-pill" id="leaderrollno" name="leaderrollno" placeholder="Leader Roll number" required>
                        <small class="form-text">Please enter Roll number of the Institute(VNIT).</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Leader Name</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control auto-save rounded-pill" id="name" name="name" placeholder="Leader Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-md-4 col-form-label">Leader Phone Number</label>
                    <div class="col-md-8">
                        <input type="varchar" class="form-control auto-save rounded-pill" id="phone" name="phone" placeholder="Leader Phone Number" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label">Leader Email</label>
                    <div class="col-md-8">
                        <input type="email" class="form-control auto-save rounded-pill" id="email" name="email" placeholder="Leader Email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="groupsize" class="col-md-4 col-form-label">Group Size</label>
                    <div class="col-md-8">
                        <input type="number" class="form-control auto-save rounded-pill" id="groupsize" name="groupsize" placeholder="Number of members in the team" required>
                    </div>
                </div>
              
            <input type="button" name="password" class="next btn btn-danger  align-items-center my-4" value="Next" />
        </fieldset>
        <fieldset style="width:90%;">
        <div class="card-heading text-center">
                    <h1 class="title pb-2">Questionaire</h1>
                    <hr>
                    <h3 class="title pb-2">Personal Details</h3>
                </div>
                <div class="form-group row">
                    <label for="linkedinProfile" class="col-md-4 col-form-label">LinkedIn Profile*</label>
                    <div class="col-md-8">
                        <input type="varchar" class="form-control auto-save rounded-pill" id="linkedinProfile" name="linkedinProfile" placeholder="Your profile link" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="leaderCV" class="col-md-4 col-form-label">CV of Leader*</label>
                    <div class="col-md-8">
                        <input type="varchar" class="form-control auto-save rounded-pill" id="leaderCV" name="leaderCV" placeholder="Provide the Drive link of the CV" required />
                    </div>
                </div>


                <div class="card-heading text-center">
                    <h3 class="title pb-2 comDet">Company Details</h3>
                </div>
                <div class="form-group row">
                    <label for="webLink" class="col-md-4 col-form-label">Website/App/<br>eCommerce link</label>
                    <div class="col-md-8">
                        <input type="varchar" class="form-control auto-save rounded-pill" id="webLink" name="webLink" placeholder="Company's link">

                    </div>
                </div>
                <div class="form-group row">
                    <label for="socialHandles" class="col-md-4 col-form-label">Social Media Links</label>
                    <div class="col-md-8">
                        <input type="varchar" class="form-control auto-save rounded-pill" id="socialHandles" name="socialHandles" placeholder="Social Media Handels">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="typeOfComp" class="col-md-4 col-form-label">Type Of Startup*</label>
                    <div class="col-md-8 text-white">
                        <input type="radio" value="Product"  name="typeOfComp" id="typeOfComp">Product Based </input>
                        <br>
                        <input type="radio" value="Service" name="typeOfComp">Service Based</input>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="detailsMentor" class="col-md-4 col-form-label">Details of mentors/investors</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control auto-save rounded-pill" id="detailsMentor" name="detailsMentor" placeholder="Name/Social media or other link">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="officeAddress" class="col-md-4 col-form-label">Office Address</label>
                    <div class="col-md-8">
                        <input type="varchar" class="auto-save form-control rounded-pill" id="officeAddress" name="officeAddress" placeholder="If any*">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="registration" class="col-md-4 col-form-label">Is it registered</label>
                    <div class="col-md-8 text-white">
                        <input type="radio" value="Yes"  name="registration" id="registration">Yes</input>
                        <input type="radio" value="No"  name="registration" id="registration">No</input>
                    </div>
                </div>

            <!-- <div style="display: flex;justify-content: center;"> -->
            <input type="button" name="previous" class="previous btn btn-danger mx-5" value="Previous" />
            <input type="button" name="next" class="next btn btn-danger" value="Next" />
        <!-- </div> -->
        </fieldset>
        <fieldset style="width:90%;">
        <div class="card-heading text-center">
                    <h1 class="title pb-2">Questionaire</h1>
                    <hr>
                    <h3 class="title pb-2">Value Proposition*</h3>
                </div>
                <div class="form-group row">
                    <label for="valueP1" class=" col-form-label qn2">What problems are you Solving?</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="valueP1" name="valueP1" rows="2" fix required></textarea>
                </div>
                <div class="form-group row">
                    <label for="valueP2" class=" col-form-label qn2">What is your Company going to make? <br>Please describe your Product and what value is it going to add.</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="valueP2" name="valueP2" rows="2" fix required></textarea>
                </div>
                <div class="form-group row">
                    <label for="valueP3" class=" col-form-label qn2">How will you stand out among your competitors?</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="valueP3" name="valueP3" rows="2" fix required></textarea>
                </div>
                <div class="form-group row">
                    <label for="valueP4" class=" col-form-label qn2">Who are your target Customers?</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="valueP4" name="valueP4" rows="2" fix required></textarea>
                </div>

                <div class="heading2 text-center">
                  <h3 class="title pb-2">Revenue(Optional)</h3>
                </div>
                <div class="form-group row">
                    <label for="revenue1" class=" col-form-label qn2">Present Revenue model.</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="revenue1" name="revenue1" rows="2" ></textarea>
                </div>
                <div class="form-group row">
                    <label for="revenue2" class=" col-form-label qn2">Future prospect regarding your startup.</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="revenue2" name="revenue2" rows="2" ></textarea>
                </div>

                <div class="heading2 text-center">
                  <h3 class="title pb-2">Marketing Startegies*</h3>
                </div>
                <div class="form-group row">
                    <label for="market1" class=" col-form-label qn2">How are you Planning to reach to your Target Customers?Explain</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="market1" name="market1" rows="2" required></textarea>
                </div>
                <div class="form-group row">
                    <label for="market2" class=" col-form-label qn2">Which channel gets the highest traffic and is most effective?</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="market2" name="market2" rows="2" required></textarea>
                </div>

            <!-- <div style="display: flex;justify-content: center;"> -->
            <input type="button" name="previous" class="previous btn btn-danger mx-5" value="Previous" />
            <input type="button" name="next" class="next btn btn-danger" value="Next" />
        <!-- </div> -->
        </fieldset>
        <fieldset style="width:90%;">
        <div class="card-heading text-center">
                    <h1 class="title pb-2">Questionaire</h1>
                    <hr>
                    <h3 class="title pb-2">B-Plan Competitions(Optional)</h3>
                </div>
                <div class="form-group row">
                    <label for="bplan1" class=" col-form-label qn2">Name of the competitions you have participated and the number of levels you cleared.</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="bplan1" name="bplan1" rows="2"></textarea>
                </div>
                <div class="form-group row">
                    <label for="bplan2" class=" col-form-label qn2">Learning from those competitions individually.</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="bplan2" name="bplan2" rows="2"></textarea>
                </div>


                <div class="heading2 text-center">
                  <h3 class="title pb-2">Your current stage</h3>
                </div>
                <div class="form-group row">
                    <label for="stage1" class=" col-form-label qn2">How long each of you has been working on this?How many hours do you spend weekly on it?Explain(*)</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="stage1" name="stage1" rows="2"  required></textarea>
                </div>
                <div class="form-group row">
                    <label for="stage2" class=" col-form-label qn2">If you have already participated or committed or participated in an incubator,"accelator" or "pre-accelerator" program?(Optional)</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="stage2" name="stage2" rows="2"></textarea>
                </div>
                <div class="form-group row">
                    <label for="stage3" class=" col-form-label qn2">How is your Equity Distribution?(Optional)</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="stage3" name="stage3" rows="2"></textarea>
                </div>


                <div class="heading2 text-center">
                  <h3 class="title pb-2">Partners(Optional)</h3>
                </div>
                <div class="form-group row">
                    <label for="partners1" class=" col-form-label qn2">Who are your key Partners?</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="partners1" name="partners1" rows="2"></textarea>
                </div>
                <div class="form-group row">
                    <label for="partners2" class=" col-form-label qn2">Which key resourses you are acquiring from them? And How do you make relations with your Partners?</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="partners2" name="partners2" rows="2"></textarea>
                </div>

            <!-- <div style="display: flex;justify-content: center;"> -->
            <input type="button" name="previous" class="previous btn btn-danger mx-5" value="Previous"/>
            <input type="button" name="next" class="next btn btn-danger" value="Next" />
        <!-- </div> -->
        </fieldset>
        
        <fieldset style="width:90%;">
        <div class="card-heading text-center">
                    <h1 class="title pb-2">Questionaire</h1>
                    <hr>
                    <h3 class="title pb-2">Other Questions*</h3>
                </div>
                <div class="form-group row">
                    <label for="othQn1" class=" col-form-label qn2">What do you expect from C-Suites? What are the key resources that will be needed for your startup?</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="othQn1" name="othQn1" rows="2"></textarea>
                </div>
                <div class="form-group row">
                    <label for="othQn2" class=" col-form-label qn2">Ever Collaborated with another Startup?</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="othQn2" name="othQn2" rows="1"></textarea>
                </div>
                <div class="form-group row">
                    <label for="othQn3" class=" col-form-label qn2">How many Startups do you know from VNIT?</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="othQn3" name="othQn3" rows="1"></textarea>
                </div>
                <div class="form-group row">
                    <label for="othQn4" class=" col-form-label qn2">Would you recommend name of any other Startup that should be included in the community?</label>
                    <br>
                    <textarea class="form-control auto-save ans " id="othQn4" name="othQn4" rows="1"></textarea>
                </div>

            <input type="button" name="previous" class="previous btn btn-danger" value="Previous" />
            <!-- <input type="submit" name="submit" class="submit btn btn-success" value="Submit" /> -->
            <button type="submit" name="submit" class="submit btn btn-success" value="Submit">Submit</button>
        </fieldset>
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
    <script>
        $(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
  });
  
});
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
