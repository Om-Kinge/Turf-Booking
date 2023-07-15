<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="booking.css">
    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Cookie&family=Courgette&family=Fredoka:wght@500&family=Rochester&family=Satisfy&display=swap"
        rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="icons/fav.png">
    <title>turfs
    </title>
</head>

<body>
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

                    <a href="profile.php">
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
                    <li class="active"> Booking</li>
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
        <!-- <div class="turf_container"> -->
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <img src="data:image/jpeg;base64,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"
                        alt="rover" />
                </div>
                <div class="card-body">
                    <!-- <span class="tag tag-teal">Technology</span> -->
                    <h2>
                        Shree Sports
                    </h2>
                    <h4>
                        An exploration into the modern world of sports.
                    </h4>
                    <details>
                        <summary>View Details</summary>
                        price: 700$/hr <br>
                        Sports : Cricket , football , basketball<br>
                        location :<br>
                        Contact : 9288927283

                    </details>
                     <a href="Book_form.php">
            <button class="book_now">Book now</button>
                    </a>
                    <div class="user">
                        <img src="https://yt3.ggpht.com/a/AGF-l7-0J1G0Ue0mcZMw-99kMeVuBmRxiPjyvIYONg=s900-c-k-c0xffffffff-no-rj-mo"
                            alt="user" />
                        <div class="user-info">
                            <h5>mayanti vagh</h5>
                            <!-- <small></small> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="data:image/jpeg;base64,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"
                        alt="ballons" />
                </div>
                <div class="card-body">
                    <!-- <span class="tag tag-purple">Popular</span> -->
                    <h2>
                        Sportinger Turf
                    </h2>
                    <h4>
                        The future of sports can be scary, but there are ways to
                        deal with that.
                    </h4>
                    <details>
                        <summary>View Details</summary>
                        price: 200$/hr <br>
                        Sports : Cricket , football , basketball<br>
                        location :<br>
                        Contact : 9288927283

                    </details>
                    <a href="Book_form.php">
            <button class="book_now">Book now</button>
                    </a>

                    <div class="user">
                        <img src="https://lh3.googleusercontent.com/ogw/ADGmqu8sn9zF15pW59JIYiLgx3PQ3EyZLFp5Zqao906l=s32-c-mo"
                            alt="user" />
                        <div class="user-info">
                            <h5>Anant Roy</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="data:image/jpeg;base64,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"
                        alt="ballons" />
                </div>
                <div class="card-body">
                    <!-- <span class="tag tag-purple">Popular</span> -->
                    <h2>

                        Janam Turf
                    </h2>
                    <h4>
                        The future of sports can be scary, but there are ways to
                        deal with that.
                    </h4>
                    <details>
                        <summary>View Details</summary>
                        price: 1700$/hr <br>
                        Sports : Cricket , football , basketball<br>
                        location :<br>
                        Contact : 9288927283

                    </details>
                    <a href="Book_form.php">
            <button class="book_now">Book now</button>
                    </a>

                    <div class="user">
                        <img src="https://lh3.googleusercontent.com/ogw/ADGmqu8sn9zF15pW59JIYiLgx3PQ3EyZLFp5Zqao906l=s32-c-mo"
                            alt="user" />
                        <div class="user-info">
                            <h5>Naman Ojha</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- </div> -->

    </div>





    <footer>
        <div class="footer">
            <h5>Turf Booking Software</h5>

        </div>
    </footer>
</body>

</html>