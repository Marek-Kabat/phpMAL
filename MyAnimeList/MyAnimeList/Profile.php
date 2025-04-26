<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'conn.php';?>
    <?php include 'logindata.php';?>
    <?php include 'add_user.php';?>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="style.css">

    <style>

    </style>
</head>
<body>


<?php include 'navbar.php';?>

<?php

echo "<h1>Welcome, ".$_SESSION['username']."</h1>";

?>
<div>
    <div class="col-4">
<!--        <a><img src="zero.jpg"></a>-->
        <?php
        if($_SESSION['login']==1) {
            $userid = $_SESSION['iduser'];
            $sql = "SELECT Picture FROM User WHERE idUser= '$userid'";
            $result = $conn->query($sql);
            $row=$result->fetch_assoc();
            echo "<a><img style='width:200px;height:200px' src=" . $row['Picture'] . " ></a>";
            echo "<form action='addpfp.php' method='POST' enctype='multipart/form-data'>  <input type='file' name='picture' accept='image/*'> <br> <input type='hidden' name='user' value='$userid'> <input type='submit' name='submit' value=submit> </form>";

        }

        ?>

    </div>
    <div class="col-4">
        <H1>Your stats:</H1>
    </div>
    <div class="col-4">
        <?php
        if($_SESSION['login']==1) {
            $sql = "SELECT 
    ua.User_idUser AS UserId,
    SUM(HowLong.Eps) AS TotalEpisodesWatched,
    SUM(HowLong.Eps * HowLong.HowLong) AS TotalMinutesWatched
FROM 
    User_has_Anime ua
JOIN 
    Anime a ON ua.Anime_idAnime = a.idAnime
JOIN 
    HowLong ON a.HowLong_idHowLong = HowLong.idHowLong
WHERE 
                ua.User_idUser = $userid";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                echo "<h2>Total minutes watched:" . $row["TotalMinutesWatched"] . " <br> Total eps watched:" . $row["TotalEpisodesWatched"] . " </h2>";
            } else{
                echo "No anime added";
            }

        }
        ?>
    </div>
</div>
<div>
    <h2 class="col-12">All anime</h2>
    <div >
        <?php
        $idUser= $_SESSION['iduser'];
        $sql = "SELECT Anime_idAnime FROM User_has_Anime WHERE User_idUser= '$idUser'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
                $IDAni=$row['Anime_idAnime'];
                $sql1 = "SELECT Name, Picture FROM Anime WHERE idAnime= '$IDAni'";
                $result1 = $conn->query($sql1);
                $row1=$result1->fetch_assoc();
                echo "<div class='col-2'> <img style='width:225px;height:350px'  src=" . $row1['Picture'] . "  > <br> <p> " . $row1["Name"] . " </p> </div>";


            }
        }
        ?>
    </div>

</div>
<!--<div>-->
<!--    <h2 class="col-12">All anime</h2>-->
<!--    <div class="col-2">-->
<!--        <a><img src="139318.jpg"></a>-->
<!--        <h3>Nazev</h3>-->
<!--    </div>-->
<!--    <div class="col-2">-->
<!--        <a><img src="139318.jpg"></a>-->
<!--        <h3>Nazev</h3>-->
<!--    </div>-->
<!--    <div class="col-2">-->
<!--        <a><img src="139318.jpg"></a>-->
<!--        <h3>Nazev</h3>-->
<!--    </div>-->
<!--    <div class="col-2">-->
<!--        <a><img src="139318.jpg"></a>-->
<!--        <h3>Nazev</h3>-->
<!--    </div>-->
<!--    <div class="col-2">-->
<!--        <a><img src="139318.jpg"></a>-->
<!--        <h3>Nazev</h3>-->
<!--    </div>-->
<!--</div>-->


<?php include 'Footer.php';?>

</body>
</html>