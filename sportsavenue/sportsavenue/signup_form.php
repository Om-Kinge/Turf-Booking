<?php
$con=mysqli_connect("localhost","root","","user");
$msg = "wrong password";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $favourite=$_POST['favourite'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    if($password==$cpassword){
        $sql="INSERT INTO `registration` ( `name`, `email`, `favorite`, `password`) VALUES ( '$name', '$email', '$favourite', '$password');";
        $sql_result=mysqli_query($con,$sql);
    }
    else{
        echo $msg;
    }
    header("Location:form.php");
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form1.css">
    <title>Signup form</title>
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

        label {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">

        <form class="form" method="post">
            <h3>SignUp form</h3>

            <label for="name">Name : <input type="text" name="name" id="name" placeholder="Enter Full Name"
                    id="username"></label>
            <label for="Email">Email : <input type="text" name='email' id='email' placeholder="Email or phone"
                    id="username"></label>
            <label> Favourite Sport :
                <select name="favourite" id="favourite">
                    <option value="cricket">Cricket</option>
                    <option value="football">Football</option>
                    <option value="badminton">Badminton</option>
                    <option value="tennis">Tennis</option>


                </select>
            </label>

            <label for="password">Password</label>
            <input type="password" name='password' placeholder="Password" id="password">
            <label for="password"> Confirm Password</label>
            <input type="password" name='cpassword' placeholder="Password" id="cpassword">




            <div class="main_div">
                <button name="submit" id="submit"> Sign Up</button>
            </div>
            <div class="social">
                <div class="go"><i class="fab fa-google"></i> Google</div>
                <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
            </div>
        </form>
    </div>
</body>

</html>