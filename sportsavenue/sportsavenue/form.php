<?php
session_start();
$msg="";
$con=mysqli_connect("localhost","root","","user");

if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];


$sql="select * from registration where email='$email'";
$sql_result=mysqli_query($con,$sql);
$num=mysqli_num_rows($sql_result);
$fetch=mysqli_fetch_array($sql_result);
$_SESSION['user']=$fetch['name'];

$_SESSION['mail']=$fetch['email'];
$_SESSION['fav']=$fetch['favorite'];





if($num>0){
   if($password==$fetch['password']){
       header("Location:home.php");
   }
   else{
       $msg="Invalid password";
   }
}
else{
    $msg="Email does not exist";
}





}


?>








<!DOCTYPE html>
<html lang="en">

<head>

    <title>Turf-Booking|form </title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="form1.css">
    <!--Stylesheet-->
    <style>
        .form {
            margin-top: 1vh;
            height: fit-content;
            width: 500px;
            min-width: 350px;
            margin: 0px 30px;
            top: 50%;
            padding: 20px 30px;
        }
        .message{
            text-align:center;
             color: #d93636;
        }
    </style>
</head>

<body>
    <div class="container">
        <form class="form" method="post">
            <h3>Login form</h3>
            <div class="message">
                <?php
               echo $msg;
                ?>
            </div>

            <label for="username">Email</label>
            <input type="text" name='email' placeholder="Email or Phone" id="email">
            <label for="password">Password</label>
            <input type="password" name='password' placeholder="Password" id="password">

           <h6> <a href = "signup_form.php">Don't have account ? </a></h6>

            <div class="main_div">
                <button name='submit' id='submit'>Log In</button>
            </div>
            <div class="social">
                <div class="go"><i class="fab fa-google"></i> Google</div>
                <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
            </div>
        </form>
    </div>


</body>

</html>