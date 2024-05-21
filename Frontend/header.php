 <!-- Header -->
 <div class="header">

<!-- udemy and category -->
<div class="headerText1">
    <div class="udemylogo">
    <img src="images/logo-udemy.svg" width="91" height="34"/></div>
    <div class="category">Categories</div>
    <!--<a href="#">
        <?php  if (basename($_SERVER['PHP_SELF']) == "index.php") {
            echo "Categories";
        } ?>
    </a>-->


</div>
<!--udemy and categry end-->


<!-- Search bar -->
<div class="searchbar">

     <form action="" method="get" >
    <div class="searchdiv">
     <box-icon name='search' class="searchbutton"></box-icon>
 <input type="text" name="query" placeholder="Search for anything" class="searchInp"  ></div>
        </form>
</div>
 <!-- Search bar end-->



 <!-- Third part -->
 <div class="headerText2">
    <div class="text business"><a href="#">Udemy Business</a></div>

    <?php
    if(basename($_SERVER['PHP_SELF'])=="home.php"){
        echo"
   
        <div class='text instructor'> <a href='#'>Instructor</a></div>
        <div class='text learning'><a href='#'>My Learning</a></div>
       <div class='text heart'><i class='fa-regular fa-heart'></i></div>
       <div class='text cart'> <i class='fa-solid fa-cart-shopping'></i></div>
       <div class='text notification'><box-icon name='bell'></box-icon></div>
       <div class='text profile'>MM</div>
 </div>";


   

    }
    else{
        echo"
        <div class='text instructor'> <a href='#'>Teach on Udemy</a></div>
        <div class='text cart'> <i class='fa-solid fa-cart-shopping'></i></div>
        <div class='text learning'><a href='login.php'><button>Login</button></a></div>
        <div class='text learning'><a href='login.php'><button>Signup</button></a></div>
        <div class='text learning'><box-icon name='globe' style='margin-top: 5%;'></box-icon></div>
      </div>";
   
    }
 ?>
 <!-- Third part end-->


</div>
<!-- Header end-->


