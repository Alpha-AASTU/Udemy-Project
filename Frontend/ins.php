<?php
session_start();
$user_id =  $_SESSION['user_id'];
$title=$video=[];
$course_id=[];
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "udemy_db2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT title,course_id from course where user_id=$user_id";
$result = $conn->query($sql);
$index=0;
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $title[$index]=$row['title'];
        $course_id[$index]=$row['course_id'];
        $index++;
    }
}
$index=0;
for($i=0;$i<count($course_id);$i++){
$sql2 = "SELECT video from course_resource where course_id=$course_id[$i]";
$result = $conn->query($sql2);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $video[$index]=$row['video'];
        $index++;
    }
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Page</title>
    <link rel="stylesheet" href="style/insstyle.css">
    <link rel="stylesheet" href="style/footer.css">
</head>
<body>
    <main>
    <h2>Uploaded Videos</h2>
        <?php
        for($i=0;$i<count($title);$i++){
            echo "
            <section class='video-list'>
            <div class='video' id='video1'>
                <h3>$title[$i]</h3>
                <video controls>
                    <source src='$video[$i]' type='video/mp4'>
                </video>
            </div>
        </section>";
        }
            
        
        ?>
        
    </main>
    
<div class="footer">
            
            <div class="infooter1">
                <div class="infooter11"><h2>Top companies choose Udemy Business to build in-demand career skills.</h2></div>
                <div class="infooter12">
                    <div><h2>Nasdaq</h2></div>
                    <div><h2>box</h2></div>
                    <div><h2>NetApp</h2></div>
                    <div><h2>eventbrite</h2></div>
                </div>
            </div>

            <div class="infooter2">
                <div class="infooter21">

                    <div class="col">
                        <div><a href="#">Udemy Business</a></div>
                        <div><a href="#">Teach on Udemy</a></div>
                        <div><a href="#">Get the app</a></div>
                        <div><a href="#">About us</a></div>
                        <div><a href="#">Contact us</a></div>
                    </div>

                    <div class="col">
                        <div><a href="#">Careeers</a></div>
                        <div><a href="#">Blogs</a></div>
                        <div><a href="#">Help and Support</a></div>
                        <div><a href="#">Afiliate</a></div>
                        <div><a href="#">Investors</a></div>
                    </div>

                    <div class="col">
                        <div><a href="#">Terms</a></div>
                        <div><a href="#">Privacy policy</a></div>
                        <div><a href="#">Cookie Settings</a></div>
                        <div><a href="#">Sitemap</a></div>
                        <div><a href="#">Accessibility Statement</a></div>
                    </div>

                </div>
                <div class="infooter22"><h3 class="lasth3"><box-icon name='globe' style="margin-top: 5%;"></box-icon> English</h3></div>

            </div>

            <div class="infooter3">
                    <div><img src="images/logo-udemy-white.svg" width="91" height="34"/></div>
                    <div class="copy"><small> &#169; 2024 Udemy, Inc.</small></div>
            </div>

         </div><style>.footer{width:100vw; height:380px}</style>
</body>
</html>
