<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="homepage.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font-awesome link -->
    <link rel="icon" type="image/x-icon" href="icons/fav.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Cookie&family=Courgette&family=Fredoka:wght@500&family=Rochester&family=Satisfy&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="profile.css">
    <title>Turf Booking
    </title>
</head>

<body>
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

                    <a href="#">
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
                    <li class=""> Home </li>
                </a>
                <a href="profile.php">
                    <li class="active"> Profile</li>
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
                    <li> Feed</li>
                </a>
                <hr>
                <a href="aboutus.php">
                    <li>About Us</li>
                </a>



            </ul>
        </div>
        <div class="home_page_right_content">
            <div class="top flex">
                <div class="left flex">
                    <div class="profile_picture">

                    </div>
                </div>
                <div class="right">

                    <div class="about_user">
                        <!-- <h3>Pranav Lad</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure fuga impedit qui, sit beatae
                            totam.</p> -->
                            <h2>
                            <?php
                            echo "Name :";
                            echo $_SESSION['user'].".<br>";
                            echo "email is : " . $_SESSION['mail'].".<br>";
                            echo "Favourite Sports : ". $_SESSION['fav'];
                            ?>
                            </h2>


                        <div class="progress_bar">
                            <div class="progress1 progress"></div>
                        </div>
                    </div>
                </div>
                <!-- <div class="progress_bar">
                    <div class="progress1 progress"></div>
                </div> -->
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>





    <footer>
        <div class="footer">
            <h5>Turf Booking Software</h5>

        </div>


</body>

</html>