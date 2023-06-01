<?php
  include "connect.php";

  if($_POST){
    $id = $_POST["id"];
    
    $sql = "select name, start_course, end_course, course_hours, institution, attachment_file from courses where id = $id;";
    if($result = mysqli_query($con, $sql)){
        $row = mysqli_fetch_assoc($result);

        $name = $row["name"];
        $start_course =  $row["start_course"];
        $end_course =  $row["end_course"];
        $course_hours =  $row["course_hours"];
        $institution =  $row["institution"];
        $attachment_file =  $row["attachment_file"];

        [$start_year, $start_month, $start_day] = explode("-", $start_course);
        [$end_year, $end_month, $end_day] = explode("-", $end_course); 
        
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses </title>
    <link rel="stylesheet" href="../css/myStyle.css">
</head>

<body>
    <header>
        <div>
            <nav>
                <a href="home.php">Personal Information</a>
                <a href="ViewCours.php">courses Information</a>
                <a href="ViewExperience.php">Experiences Information</a>
                <a href="AddCourses.php">Add courses</a>
                <a href="AddExperience.php">Add experience</a>
            </nav>
            <div class="logo">
                <img src="../images/Azhar_WHITE_LOGO.png" alt="azher">
            </div>
        </div>
    </header>
    <h1 class="till" style="font-family: Unispace; padding: 20px 20px 0px 40px;">Course "NetWork Managment Admin"</h1>
    <p style="font-family: Tahoma;" class="par">
        <?php echo "from $start_day/$start_month/$start_year to $end_day/$end_month/$end_year, Totally 50 training hours"; ?><br><br>
        Institution was "<?php echo $institution;?>"
    </p>
    <figure>
        <img src="./uploads/<?php echo $attachment_file;?>" alt="Photograph of cours" class="grad-1" />
        <br><br>
        <figcaption style="margin: 0px 35px;">
            Certificate file.
        </figcaption>
    </figure>

</body>

</html>