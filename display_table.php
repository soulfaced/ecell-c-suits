<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
   
   <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Welcome </title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

   </head>
   
   <body>

   <?php
        $servername = "localhost";
        $username = "ias2020";
        $password = "ecell123";
        $dbname = "csuites";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT sno,startupidea, leaderid, leaderrollno, name, phone, email, groupsize, linkedinProfile, leaderCV, webLink, socialHandles, typeOfComp, detailsMentor, officeAddress, registration, valueP1, valueP2, valueP3, valueP4, revenue1, revenue2, market1, market2, bplan1, bplan2, stage1, stage2, stage3, partners1, partners2, othQn1, othQn2, othQn3, othQn4 FROM csuites_data";
        $result = mysqli_query($conn, $sql);
        
    ?>

   <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Startup Idea</th>
                <th scope="col">Leader ID</th>
                <th scope="col">Leader Roll No</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">GroupSize</th>
                <th scope="col">linkedinProfile</th>
                <th scope="col">leaderCV</th>
                <th scope="col">webLink</th>
                <th scope="col">socialHandles</th>
                <th scope="col">typeOfComp</th>
                <th scope="col">detailsMentor</th>
                <th scope="col">officeAddress</th>
                <th scope="col">registration</th>
                <th scope="col">valueP1</th>
                <th scope="col">valueP2</th>
                <th scope="col">valueP3</th>
                <th scope="col">valueP4</th>
                <th scope="col">revenue1</th>
                <th scope="col">revenue2</th>
                <th scope="col">market1</th>
                <th scope="col">market2</th>
                <th scope="col">bplan1</th>
                <th scope="col">bplan2</th>
                <th scope="col">stage1</th>
                <th scope="col">stage2</th>
                <th scope="col">stage3</th>
                <th scope="col">partners1</th>
                <th scope="col">partners2</th>
                <th scope="col">othQn1</th>
                <th scope="col">othQn2</th>
                <th scope="col">othQn3</th>
                <th scope="col">othQn4</th>
            </tr>
        </thead>
        <?php
            while($row = mysqli_fetch_assoc($result)):
        ?>
        <tbody>
            <tr>
                <td><?php echo $row["sno"]; ?></td>
                <td><?php echo $row["startupidea"]; ?></td>
                <td><?php echo $row["leaderid"]; ?></td>
                <td><?php echo $row["leaderrollno"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["groupsize"]; ?></td>
                <td><?php echo $row["linkedinProfile"]; ?></td>
                <td><?php echo $row["leaderCV"]; ?></td>
                <td><?php echo $row["webLink"]; ?></td>
                <td><?php echo $row["socialHandles"]; ?></td>
                <td><?php echo $row["typeOfComp"]; ?></td>
                <td><?php echo $row["detailsMentor"]; ?></td>
                <td><?php echo $row["officeAddress"]; ?></td>
                <td><?php echo $row["registration"]; ?></td>
                <td><?php echo $row["valueP1"]; ?></td>
                <td><?php echo $row["valueP2"]; ?></td>
                <td><?php echo $row["valueP3"]; ?></td>
                <td><?php echo $row["valueP4"]; ?></td>
                <td><?php echo $row["revenue1"]; ?></td>
                <td><?php echo $row["revenue2"]; ?></td>
                <td><?php echo $row["market1"]; ?></td>
                <td><?php echo $row["market2"]; ?></td>
                <td><?php echo $row["bplan1"]; ?></td>
                <td><?php echo $row["bplan2"]; ?></td>
                <td><?php echo $row["stage1"]; ?></td>
                <td><?php echo $row["stage2"]; ?></td>
                <td><?php echo $row["stage3"]; ?></td>
                <td><?php echo $row["partners1"]; ?></td>
                <td><?php echo $row["partners2"]; ?></td>
                <td><?php echo $row["othQn1"]; ?></td>
                <td><?php echo $row["othQn2"]; ?></td>
                <td><?php echo $row["othQn3"]; ?></td>
                <td><?php echo $row["othQn4"]; ?></td>
            </tr>
        </tbody>
        <?php endwhile; ?>
   </table>
   
   <button type="button" class="btn btn-secondary btn-lg btn-block"><a href = "display_logout.php">Sign Out</a></button>
   </body>
   
</html>