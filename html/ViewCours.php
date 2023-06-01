<?php 
    include "connect.php"; 
    $sql = "select * from courses;";
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
    <title>Courses Information</title>
    <link rel="stylesheet" href="../css/myStyle.css">
</head>

<body>
    <header>
        <div>
            <nav>
                <a href="home.php">Personal Information</a>
                <a href="ViewCours.php" style="color: white;">courses Information</a>
                <a href="ViewExperience.php">Experiences Information</a>
                <a href="AddCourses.php">Add courses</a>
                <a href="AddExperience.php">Add experience</a>
            </nav>
            <div class="logo">
                <img src="../images/Azhar_WHITE_LOGO.png" alt="azher">
            </div>
        </div>
    </header>
    <h1 class="till">All Courses Information</h1>
    <table border="1" cellspacing="0">
        <thead>
            <tr>
                <th rowspan="2" width="40">#</th>
                <th rowspan="2" width="200">Course Name</th>
                <th rowspan="2" width="150">Total Hourse</th>
                <th colspan="2" width="200">Date</th>
                <th rowspan="2" width="200">Institution</th>
                <th rowspan="2" width="130">Attachment</th>
                <th rowspan="2" width="250">Notes</th>
            </tr>
            <tr>
                <th width="100">From</th>
                <th width="100">To</th>
            </tr>
        </thead>

        <?php
    for($i = 1;$i<= $row_count; $i++){
        $row = mysqli_fetch_assoc($result);
        
        $id = $row["id"];
        $name = $row["name"];
        $start_course = $row["start_course"];
        $end_course = $row["end_course"];
        $institution = $row["institution"];
        $attachment_file = $row["attachment_file"];
        $attachment_url = $row["attachment_url"];
        $notes = $row["notes"];
        $course_hours = $row["course_hours"];
        
        
        [$start_year, $start_month, $start_day] = explode("-", $start_course);
        [$end_year, $end_month, $end_day] = explode("-", $end_course); 

        echo "<tr class='table-part1' height='100'>";
            echo "<th>$i</th>";
            echo "<td>$name </td>";
            echo "<td class= td-center >$course_hours</td>";
            echo "<td class= td-center > $start_day/$start_month/$start_year</td>";
            echo "<td class= td-center >$end_day/$end_month/$end_year</td>";
            echo "<td class= td-center >$institution</td>";
            echo "<td class= td-center ><form action='course_1View.php' method='post'><button name='id' value='$id'>View</button></form></td>";
            echo "<td>$notes</td>";
            echo "</tr>";
        }

        ?>
        <!-- <tr class="table-part1" height="100">
            <th>1</th>
            <td>Pre-programming</td>
            <td class="td-center">50</td>
            <td class="td-center"> 25/1/2019</td>
            <td class="td-center">2/3/2020</td>
            <td class="td-center">Mohamed traning</td>
            <td class="td-center"><a href="Course_1View.html">View</a></td>
            <td>Basic information about how computers and the Internet work, which is an introduction to the world of
                programming in a simple way.
                <br>Trainer: Eng. Mohammed ahmed
            </td>
        </tr>
        <tr height="100">
            <th>2</th>
            <td>Advanced microsoft Excel</td>
            <td class="td-center">60</td>
            <td class="td-center">1/4/2020</td>
            <td class="td-center">5/7/2020</td>
            <td class="td-center">Mohamed traning</td>
            <td class="td-center"><a href="Course-2View.html">View</a></td>
            <td class="td-center">This course deals with Matlab, which is the most popular programming language and
                environment that engineers rely on in many areas of calculations, data representation and complex
                mathematical equations.</td>
        </tr>
        <tr class="table-part1" height="100">
            <th>3</th>
            <td>The java learning Guids</td>
            <td class="td-center">50</td>
            <td class="td-center">8/8/2020</td>
            <td class="td-center">1/11/2020</td>
            <td class="td-center">Mohamed traning</td>
            <td class="td-center"><a href="Course-3View.html">View</a></td>
            <td class="td-center">This course demonstrates how to use XML to mark up data and information in your
                various
                applications.
                An introduction to the use of Java in developing Android applications.</td>
        </tr>
        <tr height="100">
            <th>4</th>
            <td> The c++ learning Guids</td>
            <td class="td-center">70</td>
            <td class="td-center">1/2/2021</td>
            <td class="td-center">9/5/2021</td>
            <td class="td-center">Mohamed traning</td>
            <td class="td-center"><a href="Course-4View.html">View</a></td>
            <td>
                This course explains the basics of programming in a practical and simplified way, which any programmer
                needs to know using C and C++.<br>Trainer: Eng. soaad Mohammed
            </td>

        </tr> -->

    </table>

</body>



</html>