<?php 
if(isset($_POST['rollno']))
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


$rollno=$_POST['rollno'];
$dbms=$_POST['dbms'];
$oops=$_POST['oops'];
$python=$_POST['python'];
$stats=$_POST['stats'];
$idev=$_POST['idev'];

$sql = "INSERT INTO `marks` (`rollno`, `dbms`, `oops`, `python`, `stats`, `idev`) VALUES ('$rollno', '$dbms', '$oops', '$python', '$stats', '$idev');";

if($con->query($sql)== true)
{
    // echo"succesfully inserted";
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
    <title>upload_marks</title>
    <link rel="stylesheet" href="upload_marks.css">

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
        <h2>Enter Marks</h2>

            <form action="upload_marks.php" method="post">
            
                <div>
                    <label for="rollno">Roll Number:</label>
                    <br>
                    <input type="text" id="rollno" name="rollno" required placeholder="Enter Roll No">
                </div>

                

                <div>
                    <label for="dbms">Database Management System:</label>
                    <br>
                    <input type="text" id="dbms" name="dbms" required placeholder="Enter Marks">
                </div>

                <div>
                    <label for="oops">Object Oriented Programming Systems:</label>
                    <br>
                    <input type="text" id="oops" name="oops" required placeholder="Enter Marks">
                </div>

                <div>
                    <label for="python">Python Programming Essentials:</label>
                    <br>
                    <input type="text" id="python" name="python" required placeholder="Enter Marks">
                </div>
                
                <div>
                    <label for="stats">Probability and Statistics:</label>
                    <br>
                    <input type="text" id="stats" name="stats" required placeholder="Enter Marks">
                </div>

                <div>
                    <label for="idev">Interpersonal Dynamics, Ethics and Values:</label>
                    <br>
                    <input type="text" id="idev" name="idev" required placeholder="Enter Marks">
                </div>
                
                <div class="submit_center">
                    <input class="submit" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
