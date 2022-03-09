<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>

    <h3>Register Form</h3>
    <div class="form">
        <form action="" method="post" id="myform" name="myform">
        
        <div class="name">
            <label>Enter Name</label><br>
            <input type="text" name="name" id="name" placeholder="Enter Name" ><br><br>
        </div>
        <div class="email">
            <label>Email</label><br>
            <input type="email" name="email" id="email" placeholder="Enter Email" ><br><br>
        </div>
        <div class="pass">
            <label>Password</label><br>
            <input type="password" name="pass" id="pass" placeholder="Enter Password"><br><br>
        </div>
        <div class="dob">
            <label>Date Of Birth</label><br>
            <input type="date" name="date" id="date" ><br><br>
        </div>
        <div class="gender">
            <label>Gender</label><br>
            <input type="radio" name="gender" id="gender" value="male">Male<br>
            <input type="radio" name="gender" id="gender" value="female">Female<br><br>
        </div>
        <div class="hobbies">
            <label>Hobbies</label><br>
            <input type="checkbox" name="hobby[]"  value="reading">Reading<br>
            <input type="checkbox" name="hobby[]" value="writing">Writing<br>
            <input type="checkbox" name="hobby[]" value="coding">Coding<br>

        </div>
        <input type="submit" name="submit" id="submit" onclick="validateForm()">
        
        </form>

    </div>

</body>
<!-- <script>
    function validateForm() {
    let name = document.forms["myform"]["name"].value;
    let email = document.forms["myform"]["email"].value;
    let pass = document.forms["myform"]["pass"].value;
    let dob = document.forms["myform"]["dob"].value;
    let gender = document.forms["myform"]["gender"].value;
    let hobb = document.forms["myform"]["hobbies"].value;



    if (name == "") {
        alert("Name must be filled out");
        return false;
    }else if(email == ""){
        alert("Email must be filled out");
        return false;
    }else if(dob == ""){
        alert("DOB must be filled out");
        return false;
    }
    else if(gender == ""){
        alert("gender must be filled out");
        return false;
    }
    else if(hobb == ""){
        alert("Hobbies must be filled out");
        return false;
    }
    }
</script> -->
</html>

<?php
include "conn.php";
if(isset($_POST['submit'])){
    $name=mysqli_escape_string($conn, $_POST['name']);
    $email=mysqli_escape_string($conn, $_POST['email']);
    $pass=md5($_POST['pass']);
    $dob=$_POST['date'];
    $gender=$_POST['gender'];
    $hobb=$_POST['hobby'];
    $h="";
    foreach($hobb as $value){
        $h.=$value.",";
    }
    $sql="INSERT INTO `register`(`name`, `password`,`email`, `dob`, `gender`, `hobbies`) VALUES ('$name','$pass','$email','$dob','$gender','$h')";
    //$sql="INSERT INTO `register` (`name`, `password`, `email`, `dob`, `gender`, `hobbies`) VALUES ('kuldip', 'abc', 'test@gmail.com', '2022-03-17', 'male', 'reading')";

    mysqli_query($conn,$sql);
}
?>
