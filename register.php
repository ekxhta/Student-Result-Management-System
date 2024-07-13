<?php 
 $insert = false;
if(isset($_POST['name']))
{
$server="localhost";
$username="root";
$password="";
$database= "result";

$con=mysqli_connect($server,$username,$password,$database);

if(!$con)
{
    die("connection Unsucessfull".mysqli_connect_errno());
}
// echo"Succesfull Connection";

$name = $_POST['name'];
$rollno = $_POST['rollno'];

$sql= "INSERT INTO `result`.`students` (`rollno`, `name`, `dt`) VALUES ('$rollno', '$name', current_timestamp());";

if($con->query($sql)== true)
{
    $insert = true;
}
else{
    echo "Error: $sql <br> $con->error";
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER STUDENT</title>
    <link rel="stylesheet" href="register.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;700&family=Poppins:wght@200&family=Raleway:wght@100&family=Sacramento&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:opsz@6..96&family=Inter:wght@200&family=Orbitron:wght@900&family=Raleway:wght@200&family=Sacramento&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="hero">
            <H1>REGISTER STUDENT </H1>
            <form action="register.php" method="post">
                <div>
                    <label for="name">Student Name:</label>
                    <br>
                    <input type="text" id="name" name="name" required placeholder="Enter Student Name">
                </div>
                
                <div>
                    <label for="rollno">Roll Number:</label>
                    <br>
                    <input type="text" id="rollno" name="rollno"  required placeholder="Enter Roll No">
                </div>
                
                <?php
                    if($insert == true){
                    echo "<p class='submitMsg'>Student Registered !</p>";
                    }
                ?>

                <div class="submit_center">
                    <input class="submit" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>