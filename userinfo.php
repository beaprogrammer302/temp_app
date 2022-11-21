<?php
//    $server="localhost";
//    $username = "root";
//    $password="";
//    $dbname = "youtube";

//    $con = mysqli_connect('localhost', 'root');
//    if($con){
//     echo "Successfull";
//    }
//    else{
//     echo "fail connection";
//    }
    
//    mysqli_select_db($con, 'youtube'); 

   $server = "localhost";
   $username = "root";
   $password = "";
   $dbname = "youtube"; 
    $con = mysqli_connect($server, $username, $password, $dbname);
    if($con){
      echo "Connection Successfull";
    }
    else{
      echo "Connection failed";
    }
   $user = $_POST['user'];
   echo $user;
   $email = $_POST['email'];
   echo $email;
   $mobile = $_POST['mobile'];
   echo $mobile;
   $comments = $_POST['comment'];
   echo $comments;
     if($user!="" && $email!="" && $mobile!="" && $comments!="")
     {
        $query = "INSERT INTO USERINFO VALUES ('$user','$email','$mobile','$comments')";
        $data = mysqli_query($con, $query);
        if($data){
            echo " Data Inserted";
        }
        else{
            echo "All fields are required";
        }
     }
//    $query = "insert into userinfo (user, email, mobile, comment)
//      values ('$user', '$email', '$mobile', '$comments')";
//     $data = mysqli_query($con, $query);
//     if($data){
//         echo "Data Inserted";
//     }
//     else{
//         die("insert failed");
//     }
?>