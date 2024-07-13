<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW MARKS</title>
    <link rel="stylesheet" href="student.css">

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
            <h1>MARKS</h1>

            <form action="student.php" method="post">
                <div>
                    <label for="rollno">Enter Roll Number:</label>
                    <br>
                    <input type="text" id="rollno" name="rollno" required placeholder="Enter Roll No">
                </div>

                <div class="submit_center">
                    <input class="submit" type="submit" value="Submit">
                </div>
            </form>

            <div class="marks-display">
                <?php
                    if (isset($_POST['rollno'])) {
                        $server = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "result";

                        $con = mysqli_connect($server, $username, $password, $database);

                        if (!$con) {
                            die("Connection Unsuccessful: " . mysqli_connect_errno());
                        }

                    
                        $rollno = $_POST['rollno'];

                        $sql = "SELECT * FROM `marks` WHERE rollno=$rollno";
                        $result = mysqli_query($con, $sql);

                    
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<h3 class='design'>Marks for Roll Number: $rollno</h3>";
                            echo "<p class='design'>Database Management System: " . $row['dbms'] . "</p>";
                            echo "<p class='design'>Object Oriented Programming Systems: " . $row['oops'] . "</p>";
                            echo "<p class='design'>Python Programming Essentials: " . $row['python'] . "</p>";
                            echo "<p class='design'>Probability and Statistics: " . $row['stats'] . "</p>";
                            echo "<p class='design'>Interpersonal Dynamics, Ethics and Values: " . $row['idev'] . "</p>";
                        }

                        if ($result) {
                            
                        } else {
                            echo "Error: $sql <br> " . mysqli_error($con);
                        }

                        
                        mysqli_close($con);
                    } 
                ?>


            </div>
        </div>
    </div>
</body>
</html>
