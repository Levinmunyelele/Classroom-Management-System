<?php
   session_start();
   include_once "./studentdb.php";

?>
       
 <!-- nav -->
 <style>
        
        .backhomepage{
         margin-top: 1%;  
        float: right;
        margin-right: 2%;
        margin-left: 3px;
        padding: 0.5% 1.5%;
    text-decoration: none;
    background-color: chartreuse;
    margin-left: 3px;
    font-weight: bold;
    border-radius: 5px;
  
     }
     .generalhomepage{
         padding: 0.5% 1.5%;
         text-decoration: none;
         background-color: chartreuse;
          margin-left: 3px;
          font-weight:bold;
          border-radius: 5px;
        }
        .generalhomepage:hover{
            background-color: green;
        }
 </style>
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #3B3131;">
    <a class="navbar-brand ml-5" href="./index.php">
        <img src="./assets/images/logo.png" width="80" height="80" alt="Swiss Collection">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="user-cart">  
        <?php           
        if(isset($_SESSION['user_id'])){
          ?>
          <a href="" style="text-decoration:none;">
            <i class="fa fa-user mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
         </a>
          <?php
        } else {
            ?>
            <a href="../CBC System/tlog.php" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
            </a>

            <?php
        } ?>
    </div>  
</nav>
