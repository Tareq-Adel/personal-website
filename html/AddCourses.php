<?php
include "connect.php";

if(isset($_POST["submit"])){
    $name = $_POST["course_name"];
    $hours = $_POST["course_hours"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $institution = $_POST["institution"];
    $attachment= $_POST["attachment"];
    $url = $_POST["course_url"];
    // $file = $_POST["course_file"];
    $notes = $_POST["course_notes"];

    if(isset($_FILES["attachment_file"])){
        // echo "<pre>";
        // print_r($_FILES["attachment_file"]);
        // echo "</pre>";

        $file_name = $_FILES["attachment_file"]["name"];
        $file_size = $_FILES["attachment_file"]["size"];
        $tmp_name = $_FILES["attachment_file"]["tmp_name"];
        $error = $_FILES["attachment_file"]["error"];
        if($error == 0){
            if($file_size > 12500000){
                $em = "your File Is Too Large!";
                header("Location: addCourses.php?error=$em");
            }else{

                $file_ex_lc = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                $allowed_exs = array("jpg", "jpeg", "png");

                if(in_array($file_ex_lc, $allowed_exs)){
                    $final_file_name = uniqid("IMG_", true). "." . $file_ex_lc;
                    $file_upload_path = "uploads/" . $final_file_name;
                    move_uploaded_file($tmp_name, $file_upload_path);
                    // Insert into Database
                    // $sql = "insert into courses (attachment_file) values('$final_file_name') ;";
                    // mysqli_query($con, $sql);
                    
                }else{
                    $em = "you can't upload files of this type";
                    header("Location: addCourse.php?error=$em");
                }
            }

        }else{
            $em = "unknown error occurred!";
            header("Location: addCourses.php?error=$em");
        }

    }
    
    
    $sql = "insert into courses (name, course_hours, start_course, end_course, institution, notes,attachment_file)
        values('$name', '$hours', '$start_date', '$end_date', '$institution', '$notes','$final_file_name'); ";

        $result = mysqli_query($con , $sql);
        if(!$result){
            die($mysqli_error($con));
        }

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    <link rel="stylesheet" href="../css/MyStyle.css">
</head>

<body>
    <header>
        <div>
            <nav>
                <a href="home.php">Personal Information</a>
                <a href="ViewCours.php">courses Information</a>
                <a href="ViewExperience.php">Experiences Information</a>
                <a href="AddCourses.php" style="color: white;">Add courses</a>
                <a href="AddExperience.php">Add experience</a>
            </nav>
            <div class="logo">
                <img src="../images/Azhar_WHITE_LOGO.png" alt="azher">
            </div>
        </div>
    </header>

    <div class="con">
        <img src="../images/course.jpg" alt="course" class="cors">
        <form method="POST" enctype="multipart/form-data">
            <div class="lin">
                <label class="dtl" for="course_name">Course Name:</label>
                <input type="text" class="dtl" id="course_name" name="course_name">
            </div>
            <div class="lin">
                <label class="dtl" for="course_hours">Hourse course:</label>
                <input type="number" class="dtl" min="10" max="255" id="course_hours" name="course_hours">
            </div>
            <div class="lin">
                <label class="dtl" for="start_d">Start Course:</label>
                <input type="date" class="dtl" id="start_d" name="start_date">
            </div>
            <div class="lin">
                <label class="dtl" for="end_d">End Course:</label>
                <input type="date" class="dtl " id="end_d" name="end_date">
            </div>
            <div class="lin">
                <label class="dtl" for="instit">Institution:</label>
                <input type="text" class="dtl" id="instit" name="institution">
            </div>
            <div class="lin">
                <label class="dtl">Attachment:</label>
                <div class="dtl-radio"><input type="radio" name="attachment" value="File" checked="checked">File</div>
                <div class="dtl-radio"><input type="radio" name="attachment" value="URL">URL</div>
            </div>
            <div class="lin">
                <label class="dtl" for="url">URL:</label>
                <input type="url" class="dtl" id="url" name="course_url">
            </div>
            <div class="lin">
                <label class="dtl" for="file">File:</label>
                <input type="file" class="file-1" style="width: 190px;" id="file" name="attachment_file">
            </div>
            <div class="lin">
                <label class="dtl" for="notes">Notes:</label>
                <input type="text" class="dtl-text1" id="notes" name="course_notes">
            </div>
            <div class="lin">
                <div class="div-botton-1"><input type="submit" class="botton-add-1" value="Save" name="submit"></div>
                <div class="div-botton-2"> <input type="reset" class="botton-add-2" value="Reset"></div>
            </div>
        </form>

    </div>
</body>

</html>