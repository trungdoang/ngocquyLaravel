 <?php 
 session_start();
       if (isset( $_SESSION["userid"]) &&  $_SESSION["user"]){
           echo "Xin Chào ";
       
       } else{
           header("location: http://localhost/quanlynhahang/login.php");
       }

 
       ?>