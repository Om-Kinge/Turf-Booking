<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="form.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Cookie&family=Courgette&family=Fredoka:wght@500&family=Rochester&family=Satisfy&display=swap"
        rel="stylesheet">
    <title>Turf Booking
    </title>
</head>

<body>
    <style>
        .main_menu {
            height: 100vh;
        }
    </style>
    <!-- header -->
    <header>
        <div class="header_container">
            <div class="pr_name">
                <h3> SportsAvenue </h3>
            </div>
            <div class="search_bar">

                <input type="search" placeholder="search your sport here" class="input_field">
                <button type="submit"><i class="fa fa-search"></i></button>


            </div>
            <div class="right_btns">
                <span>

                    <a href="form.php">
                        <button class="rbtn"><img src="./icons/user.png">&nbsp;<?php  echo $_SESSION['user'] ?></button>
                    </a>
                </span>
                <!-- <span>
                    <a href="signup_form.html">

                        <button class="rbtn"><img src="./icons/add-user.png">Sign Up</button>
                    </a>
                </span> -->
            </div>
        </div>
    </header>
    <div class="main_container">

        <div class="main_menu">
            <ul>

                <a href="home.php">
                    <li> Home </li>
                </a>
                <a href="profile.php">
                    <li> Profile</li>
                </a>
                <a href="booking.php">
                    <li> Booking</li>
                </a>
                <a href="community.php">
                    <li>Community</li>
                </a>
                <a href="clash.php">
                    <li> Clash</li>
                </a>
                <a href="feed.php">
                    <li class="active"> Feed</li>
                </a>
                <hr>
                <a href="aboutus.php">
                    <li>About Us</li>
                </a>



            </ul>
        </div>
        <div class="form" style="
            background: linear-gradient(to right top,rgb(174, 223, 243), rgb(224, 111, 111));
            padding: 20px 5px;
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            flex-direction: row-reverse;
            align-content: flex-end;
            backdrop-filter: blur(142px); font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            <div class="imagebg"></div>
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container" style="backdrop-filter: blur(6px);
                    border-radius: 12px;
                    width: 320px;
                    border-top: 1px solid rgba(255, 255, 255, 0.5);
                    border-left: 1px solid rgba(255, 255, 255, 0.5);
                    padding: 60px;
                    box-shadow: rgba(255, 255, 255, 0.5) -20px -20px 45px inset,
                      rgba(0, 0, 0, 0.1) 10px 10px 20px, rgba(0, 0, 0, 0.06) 5px 5px 10px;">
                    <h2>Feedback</h2><br>
                    <p>
                        Please provide your feedback below:
                    </p>
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-12 form-group"><br>
                                <label>How do you rate your overall experience?</label><br>
                                <p>
                                    <br><label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad">
                                        Bad
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average">
                                        Average
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="good">
                                        Good
                                    </label><br>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"><br><br>
                                    Comments:</label>
                                <textarea class="form-control" type="textarea" name="comments" id="comments"
                                    placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"><br><br>
                                    Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"><br><br>
                                    Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group"><br>
                                <button type="submit" class="btn btn-lg btn-warning btn-block">Post </button>
                            </div>
                        </div>

                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "><br>
                        <h3>Posted your feedback successfully!</h3>
                    </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "><br>
                        <h3>Error</h3>
                        Sorry there was an error sending your form.

                    </div>
                </div>
            </div>
        </div>





</body>

</html>