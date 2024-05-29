<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/instructor.css">

    <!-- Font awesome icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font awesome icoon link end -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js" integrity="sha512-Dm5UxqUSgNd93XG7eseoOrScyM1BVs65GrwmavP0D0DujOA8mjiBfyj71wmI2VQZKnnZQsSWWsxDKNiQIqk8sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Document</title>
</head>
<body>
    <div class="wrapper-inst">
        <!-- main content -->
        <div class="main-content">
            <!--Sidebar-->
            <div class="sidebar">
                <div ><img src="images/logo-udemy-white.svg" width="91px;" height="34px;" class="insidebar"></div>
                <div ><box-icon name='tv' class="insidebar"></box-icon></div>
                <div ><box-icon name='message' class="insidebar"></box-icon></div>
                <div ><box-icon name='bar-chart-alt-2' class="insidebar"></box-icon></div>
                <div ><box-icon name='wrench' class="insidebar"></box-icon></div>
                <div ><box-icon name='question-mark' class="insidebar"></box-icon></div>
            </div>
            <!-- sidebar ends -->

            <!--main-->
            <div class="main">

                <div class="header">
                    <div class='text notification'>Student</div>
                    <div class='text notification'><box-icon name='bell' ></box-icon></div>
                    <div class="profile notification">SS</div>
                </div>

                <div class="paragraph">
                <h3>Create an Engaging Course</h3>
                <div class="containImgtxt">
                <div class="image">
              <img src="images/instructor.jpg" width="210px" height="210px"> </div>
              <div class="txt"> you've been teaching for years or are teaching for the first time, you can<br>make an engaging course. 
               We've compiled resources and best practices to help you <br>get to the next level, no matter where you're starting.

                <br><br><br><a href="#">Get Started</a>
            </div>
                </div>
                </div>

                <div class="divbtn">
                    <a href="courseAdd.php"><button class="btn">Create Your Course</button></a>
                </div>
            </div>
            <!--main ends-->

        </div>
        <!-- main content-  ends-->
        <?php require "footer.php";?>
    </div>
    <!--wrapper ends-->
</body>
</html>
