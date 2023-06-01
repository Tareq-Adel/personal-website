<?php
include "connect.php";
if(isset($_POST["submit"])){
    $category = $_POST["category"];
    $title = $_POST["title"];
    $start_month = $_POST["start_month"];
    $end_month = $_POST["end_month"];
    $institution = $_POST["institution"];
    $description = $_POST["description"];

     

    $sql = "insert into experience (category, title, start_month, end_month, institution, description)
        values ('$category', '$title', '$start_month', '$end_month', '$institution', '$description');";

        $result = mysqli_query($con, $sql);
        if(!$result){
            die(mysqli_error($con));
        }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Expirences</title>
    <link rel="stylesheet" href="../css/MyStyle.css">
</head>

<body>
    <header>
        <div>
            <nav>
                <a href="home.php">Personal Information</a>
                <a href="ViewCours.php">courses Information</a>
                <a href="ViewExperience.php">Experiences Information</a>
                <a href="AddCourses.php">Add courses</a>
                <a href="AddExperience.php" style="color: white;">Add experience</a>
            </nav>
            <div class="logo">
                <img src="../images/Azhar_WHITE_LOGO.png" alt="azher">
            </div>
        </div>
    </header>
    <div class="con">
        <img src="../images/experience.jpg" alt="course" class="exp">
        <form method="POST" enctype="multi">
            <div class="lin">
                <label class="dtl" for="category">Expirences Category:</label>
                <select class="dtl" id="category" name="category">
                    <optgroup label="">
                        <option>Pre-programming</option>
                        <option>Programming Basics</option>
                        <option>Android Basics by Google</option>
                        <option>Introduction to Programming with MATLAB</option>
                    </optgroup>
                </select>
            </div>
            <div class="lin">
                <label class="dtl" for="title">Expirences Title:</label>
                <input type="text" class="dtl" id="title" name="title">
            </div>
            <div class="lin">
                <label class="dtl" for="start_month">Start Month:</label>
                <input type="date" class="dtl" id="start_month" name="start_month">
            </div>
            <div class="lin">
                <label class="dtl" for="end_month">End Month:</label>
                <input type="date" class="dtl" id="end_month" name="end_month">
            </div>
            <div class="lin">
                <label class="dtl" for="institution">Institution:</label>
                <input type="text" class="dtl" id="institution" name="institution">
            </div>
            <div class="lin">
                <label class="dtl" for="description">Description:</label>
                <input type="text" class="dtl-text2" id="description" name="description">
            </div>
            <div class="lin">
                <div class="div-botton-1"><input type="submit" class="botton-add-1" value="Save" name="submit"></div>
                <div class="div-botton-2"> <input type="reset" class="botton-add-2" value="Reset" name="reset"></div>
            </div>
        </form>


    </div>
</body>

</html>