                   
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font awesome icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font awesome icoon link end -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js" integrity="sha512-Dm5UxqUSgNd93XG7eseoOrScyM1BVs65GrwmavP0D0DujOA8mjiBfyj71wmI2VQZKnnZQsSWWsxDKNiQIqk8sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="style/main.css"/>
    <link rel="stylesheet" href="style/header.css"/>
    <link rel="stylesheet" href="style/footer.css"/>
    <!-- CSS end -->
    <style>
        .main{
            position: relative;
        
        }
        .popup{
            position:absolute;
            width:250px;
            height:500px;
            border-style: solid;
            display: flex;
            flex-direction: column;
            background-color: white;
            right:300px;
            
        }
        .btn1{
            padding-left:35px;
            padding-right: 35px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-right: 5px;
            background-color: #A435F0;
            color: white;
        }
        .btn2{
            margin-top: 10px;
            padding-left:35px;
            padding-right: 50px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-right: 20px;
            color: black;
            background-color: white;
        }
        .popup div{
            align-self: center;
        }
    </style>


    <title>Udemy</title>
   
</head>

<body>
   
    <div class="wrapper">

       

        <?php require "header.php";?>

        
        <!--Main section -->
        <div class="main1">


        <div class="popup">
        <div class="img"><img src="images/forvideo.jpg" alt="image" width="250px" height="200px"></div>
        <div><h3>$49.99</h3></div>
        <div><button class="btn1">Add to cart</button><span><i class="fa-regular fa-heart"></i></span></div>
        <div><a href="../BackEnd/src/payment.php?course_id=12"><button class="btn2">Buy now</button></a></div>
    </div>


           <?php
           if(basename($_SERVER['PHP_SELF'])=="home.php"){ echo"
           <div class='inmain1text'>

                <div class='textcontainer'>
                    <div class='commontext development'>Development</div>
                    <div class='commontext business2'>Business</div>
                    <div class='commontext accounting'>Finance & Accounting</div>
                    <div class='commontext IT'>IT & Software</div>
                    <div class='commontext office'>Office and Productivity</div>
                    <div class='commontext personal'>Personal Development</div>
                    <div class='commontext design'>Design</div>
                    <div class='commontext marketing'>Marketing</div>
                    <div class='commontext health'>Health and Fitness</div>
                    <div class='commontext music'>Music</div>
                </div>

            </div>";}
            ?>

           <div class="inmain">
            
                <div class="inmain1img">
                     <img src="images/bodyudemy.jpg"/>
                    </div>


                <h1 class="what">What to learn next</h1>

                <div class="videos">

                    <!-- row -->
                    <div class="video1">
                        <div class="vidimg">
                            <img src="images/forvideo.jpg">
                        </div>
                        <div class="description">
                        <div>Learn Programming</div>
                            <div>Alpha Team</div>
                            <div>5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                            <div>$100</div>
                        </div>
                    </div>

                    <div class="video1">
                        <div class="vidimg">
                        <img src="images/forvideo.jpg">
                        </div>
                        <div class="description">
                        <div>Learn Programming</div>
                            <div>Alpha Team</div>
                            <div>5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                            <div>$100</div>
                        </div>
                    </div>

                    <div class="video1">
                        <div class="vidimg">
                        <img src="images/forvideo.jpg">
                        </div>
                        <div class="description">
                        <div>Learn Programming</div>
                            <div>Alpha Team</div>
                            <div>5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                            <div>$100</div>
                        </div>
                    </div>

                    <div class="video1">
                        <div class="vidimg">
                            <img src="images/forvideo.jpg">
                        </div>
                        <div class="description">
                        <div>Learn Programming</div>
                            <div>Alpha Team</div>
                            <div>5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                            <div>$100</div>
                        </div>
                    </div>

                    <div class="video1">
                        <div class="vidimg">
                            <img src="images/forvideo.jpg">
                        </div>
                        <div class="description">
                        <div>Learn Programming</div>
                            <div>Alpha Team</div>
                            <div>5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                            <div>$100</div>
                        </div>
                    </div>
                    <!--row  ends-->

                     <!-- row -->
                     <div class="video1">
                        <div class="vidimg">
                            <img src="images/forvideo.jpg">
                        </div>
                        <div class="description">
                        <div>Learn Programming</div>
                            <div>Alpha Team</div>
                            <div>5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                            <div>$100</div>
                        </div>
                    </div>

                    <div class="video1">
                        <div class="vidimg">
                            <img src="images/forvideo.jpg">
                        </div>
                        <div class="description">
                        <div>Learn Programming</div>
                            <div>Alpha Team</div>
                            <div>5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                            <div>$100</div>
                        </div>
                    </div>

                    <div class="video1">
                        <div class="vidimg">
                            <img src="images/forvideo.jpg">
                        </div>
                        <div class="description">
                        <div>Learn Programming</div>
                            <div>Alpha Team</div>
                            <div>5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                            <div>$100</div>
                        </div>
                    </div>

                    <div class="video1">
                        <div class="vidimg">
                             <img src="images/forvideo.jpg">
                        </div>
                        <div class="description">
                        <div>Learn Programming</div>
                            <div>Alpha Team</div>
                            <div>5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                            <div>$100</div>
                        </div>
                    </div>

                    <div class="video1">
                        <div class="vidimg">
                            <img src="images/forvideo.jpg">
                        </div>
                        <div class="description">
                        <div>Learn Programming</div>
                            <div>Alpha Team</div>
                            <div>5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                            <div>$100</div>
                        </div>
                    </div>
                    <!--row  ends-->

                     <!-- row -->
                     <div class="video1">
                        <div class="vidimg">
                             <img src="images/forvideo.jpg">
                        </div>
                        <div class="description">
                        <div>Learn Programming</div>
                            <div>Alpha Team</div>
                            <div>5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                            <div>$100</div>
                        </div>
                    </div>

                    <div class="video1">
                        <div class="vidimg">
                            <img src="images/forvideo.jpg">
                        </div>
                        <div class="description">
                            <div>Learn Programming</div>
                            <div>Alpha Team</div>
                            <div>5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                            <div>$100</div>
                        </div>
                    </div>

                    
                    <!--row  ends-->


                </div>

           </div>


        </div>
        <!--Main section end -->




         <?php require "footer.php";?>


    </div>
    <!-- wrapper end -->
</body>
</html>

