<?php 
    include "conn.php";

    $email=$_POST["email"];
    $pass= md5($_POST["pass"]);

    $sql="select email,password from register where (email='$email' AND password='$pass')";
    echo $sql;
    exit;   
    $res=mysqli_query($conn,$sql);
    if (mysqli_num_rows($res) > 0) {
        echo " You Have Successfully Logged in";
      } else {
        echo " You Have Entered Incorrect Password";
      }

?>