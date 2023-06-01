<?php 
    include "connect.php"; 
    $sql = "select * from experience;";
    if($result = mysqli_query($con, $sql)){
        $row_count = mysqli_num_rows($result) *1;
        // $row = mysqli_fetch_assoc($result);
        // echo $row['id'];
        // $row = mysqli_fetch_assoc($result);
        // echo $row['id'];
        // $row = mysqli_fetch_assoc($result);
        // echo $row['id'];

    }else{
        $result = 0;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiences Information</title>
    <link rel="stylesheet" href="../css/myStyle.css">
</head>

<body>
    <header>
        <div>
            <nav>
                <a href="home.php">Personal Information</a>
                <a href=" ViewCours.php">courses Information</a>
                <a href="ViewExperience.php" style="color: white;">Experiences Information</a>
                <a href=" AddCourses.php">Add courses</a>
                <a href="AddExperience.php">Add experience</a>
            </nav>
            <div class="logo">
                <img src="../images/Azhar_WHITE_LOGO.png" alt="azher">
            </div>
        </div>
    </header>
    <h1 class="till">All Experiences Information</h1>
    <div class="info">

        <?php
    for($i = 0;$i< $row_count; $i++){
        $row = mysqli_fetch_assoc($result);
        
        $id = $row["id"];
        $category = $row["category"];
        $title = $row["title"];
        $start_month = $row["start_month"];
        $end_month = $row["end_month"];
        $institution = $row["institution"];
        $description = $row["description"];
        
        echo "<div class='info'>";
        echo "<h3>$title<sub>$institution/$category</sub></h3>";
        
        echo "<div class='date'>From $start_month to $end_month</div>";
        
        
        echo "<p>$description</p>";
        echo "</div>";
    }
    
    ?>

    </div>



</body>

</html>