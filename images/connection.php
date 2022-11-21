<?php
   $server="localhost";
   $username = "root";
   $password="";
   $dbname = "youtube";

   $conn = mysqli_connect($server, $username, $password, $dbname);
   if($conn){
    echo "Successfull";
   }
   else{
    echo "fail";
   }

?>