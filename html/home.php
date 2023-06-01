<?php
include "connect.php";

$sql = "select * from personal_information";
$result = mysqli_query($con, $sql);
if($result){
    $row = mysqli_fetch_assoc($result);

    $full_name = $row["name"];
    $gender = $row["gender"];
    $birth_date = $row["birth"];
    $nationality = $row["nationality"];
    $place_of_birth = $row["place_of_birth"];
    $job = $row["job"];
    $experience = $row["experience"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <link rel="stylesheet" href="../css/myStyle.css">
</head>

<body>
    <header>
        <div>
            <nav>
                <a href="home.php" style="color: white;">Personal Information</a>
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
    <div>
        <h1 class="till">Personal Information</h1>

    </div>
    <div class="container">
        <img src="../images/tareq-photo.jpeg" class="per">

        <div class="line">
            <div class="detalis-title">Full Name:</div>
            <div class="detalis-info"><?php echo $full_name;?></div>
        </div>
        <div class="line">
            <div class="detalis-title">Gender:</div>
            <div class="detalis-info"><?php echo $gender ;?></div>
        </div>
        <?php [$year, $month, $day] = explode("-", $birth_date); ?>
        <div class="line">
            <div class="detalis-title">Birth Date:</div>
            <div class="detalis-info"><?php echo $day; ?><sup>th</sup>,<abbr title="march"
                    style="text-decoration: none;"><?php echo $month; ?></abbr>,<?php echo $year; ?>
            </div>
        </div>
        <div class="line">
            <div class="detalis-title">Nationality:</div>
            <div class="detalis-info"><?php echo $nationality; ?></div>
        </div>
        <div class="line">
            <div class="detalis-title">Place of Birth:</div>
            <div class="detalis-info"><?php echo $place_of_birth; ?></div>
        </div>
        <div class="line">
            <div class="detalis-title">Jop:</div>
            <div class="detalis-info"><?php echo $job;?></div>
        </div>

        <div class="line">
            <div class="detalis-title">Years of experience:</div>
            <div class="detalis-info"><?php echo $experience;?> years</div>

        </div>
    </div>

</body>

</html>