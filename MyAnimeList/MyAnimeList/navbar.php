<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>


    <?php include 'conn.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <style>
        body {
            overflow-x: hidden;
        }

        .buttont {
        {border-radius: 8px;}
            background-color: violet;
            color: black;
            transition-duration: 0.4s;
            width: 150px;

        }
        .buttont:hover {
            background-color: darkviolet; /* Green */
            color: white;
        }
    </style>
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!---->
<!--<div id="navbar"  style="top: 0">-->
<!--    <div class="col-12" style="margin: auto; padding-bottom: 1px">-->
<!--        <a style="float: left" href="Index.php">-->
<!--            <img src="mal.png" alt="MyAnimeList"  style="height: 55px; width: 130px;" >-->
<!--        </a>-->
<!---->
<!--        <a href='Profile.php' style="float: right">-->
<!--            --><?php
//            session_start();
//            if($_SESSION['login']==1) {
//                echo "<h1  href='Profile.php'>".$_SESSION['username']."</h1>";
//
//            }
//
//
//            ?>
<!--        </a>-->
<!--    </div>-->
<!--    <div class="col-12"  >-->
<!---->
<!--    <div class="col-1" >-->
<!--        <div  class="dropdown" style="float: none">-->
<!--            <button class="dropbtn">Anime-->
<!--                <i class="fa fa-caret-down"></i>-->
<!--            </button>-->
<!--            <div  class="dropdown-content" >-->
<!--                <a href="SearchGenre.php">Anime search</a>-->
<!--                <a href="Top.php">Top anime</a>-->
<!--                <a href="New.php">New anime</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--        <a href="About.php" class="col-1">About us</a>-->
<!--        <a href="Help.php" class="col-1">Help</a>-->
<!---->
<!---->
<!---->
<!--        <div>-->
<!--            --><?php
//                if($_SESSION['login']==1) {
//                echo  "<a class='col-1' href='logout.php' style='float: right'>Logout</a>";
//
//                }
//            ?>
<!--          <a class="col-1" href="Logout.php" style="float: right">Logout</a>-->-->
<!--            <a class="col-1" href="Login.php" style="float: right">Login</a>-->
<!--            <a class="col-1" href="register.php" style="float: right">Register</a>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    </div>-->
<!--<div id="placeholder"> </div>-->
<!--<script>-->
<!--    document.addEventListener("DOMContentLoaded", function () {-->
<!--        stickyNavbar();-->
<!--    });-->
<!---->
<!--    window.onscroll = function () {-->
<!--        stickyNavbar();-->
<!--    };-->
<!---->
<!--    var navbar = document.getElementById("navbar");-->
<!--    var placeholder = document.getElementById("placeholder");-->
<!--    var sticky = navbar.offsetTop;-->
<!---->
<!--    function stickyNavbar() {-->
<!--        if (window.scrollY >= sticky) {-->
<!--            navbar.classList.add("sticky");-->
<!--            placeholder.style.display = "block";-->
<!--            placeholder.style.height = navbar.offsetHeight + "px";-->
<!--        } else {-->
<!--            navbar.classList.remove("sticky");-->
<!--            placeholder.style.display = "none";-->
<!--        }-->
<!--    }-->
<!--</script>-->


<div id="navbar" style="top: 0">
    <div  style="margin: auto; padding-bottom: 1px">
        <a style="float: left" href="Index.php">
            <img src="mal.png" alt="MyAnimeList"  style="height: 55px; width: 130px;" >
        </a>
        <a style="float: right" href="Profile.php">
            <?php
                        session_start();
                        if($_SESSION['login']==1) {
                            echo "<h1  href='Profile.php'>".$_SESSION['username']."</h1>";

                        }


                        ?>
        </a>
    </div>
    <div class="col-12">
        <div  class="dropdown">
            <button class="dropbtn">Anime
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" >
                <a href="SearchGenre.php">Anime search</a>
                <a href="Top.php">Top anime</a>
                <a href="New.php">New anime</a>
            </div>
        </div>

        <a href="About.php">About us</a>
        <a href="Help.php">Help</a>
        <div>
            <?php
                            if($_SESSION['login']==1) {
                            echo  "<a class='col-1' href='logout.php' style='float: right'>Logout</a>";

                            }
                        ?>
            <a class="col-1" href="Login.php" style="float: right">Login</a>
            <a href="register.php" style="float: right">Register</a>
        </div>

    </div>
</div>
<div id="placeholder"> </div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        stickyNavbar();
    });

    window.onscroll = function () {
        stickyNavbar();
    };

    var navbar = document.getElementById("navbar");
    var placeholder = document.getElementById("placeholder");
    var sticky = navbar.offsetTop;

    function stickyNavbar() {
        if (window.scrollY >= sticky) {
            navbar.classList.add("sticky");
            placeholder.style.display = "block";
            placeholder.style.height = navbar.offsetHeight + "px";
        } else {
            navbar.classList.remove("sticky");
            placeholder.style.display = "none";
        }
    }
</script>
</body>
</html>