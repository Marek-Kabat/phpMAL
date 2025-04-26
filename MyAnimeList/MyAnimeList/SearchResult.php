<!DOCTYPE html>
<html>
<head>
    <title>SearchResult</title>
    <link rel="stylesheet" href="navbar.css">
    <?php include 'conn.php';?>
    <link rel="stylesheet" href="style.css">

    <style>

    </style>
</head>
<body>
<?php include 'navbar.php';?>

<header>
    <?php
    $ge = $_POST['submit'];
    $_SESSION['name'] = $ge;
    echo "<h1> ".$_SESSION['name']."</h1>";
    ?>
</header>

<div >
    <?php


    if(isset($_POST['submit'])) {
        $Search = $_POST['submit'];
        $sql = "SELECT idGenre FROM Genre WHERE GName= '$Search'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1){
            $row=$result->fetch_assoc();
            $IDGen=$row['idGenre'];

            $sql = "SELECT Anime_idAnime FROM Anime_has_Genre WHERE Genre_idGenre= '$IDGen'";
            $result = $conn->query($sql);
            //1 2 3 .... FUNGUJE
            if ($result->num_rows > 0) {
// row id nema vliv
//            $row=$result->fetch_assoc();
                while ($row = $result->fetch_assoc()) {
                    $IDAni=$row['Anime_idAnime'];
                    $sql1 = "SELECT idAnime, Name, Picture FROM Anime WHERE idAnime= '$IDAni'";
                    $result1 = $conn->query($sql1);
                    $row1=$result1->fetch_assoc();
//                    $_SESSION['name'] = $result1;
//                    echo "<p>Name, ".$_SESSION['name']."</p>";
//                    $_SESSION[$row1['idAnime']] = $row1['Name'];
//                    echo "<p>Name, ".$_SESSION['2']."</p>";

//                    echo "<option value=\"" . $row1["idAnime"] . "\">" . $row1["Name"] . "</option>";

//                    echo '<br> <a href="AnimeDetails.php">click here to continue</a> <br>';
                    echo "<div class='col-2'> <img style=' text width:225px;height:350px'  src=" . $row1['Picture'] . "  > <br> <form action='AnimeDetails.php' method='POST' enctype='multipart/form-data'> " . $row1["Name"] . " <input type='submit' name='submit' value=\"" . $row1["idAnime"] . "\"> </form> </div>";
//                    echo " <img src=" . $row1['Picture'] . "> <br>";
//
//                    echo "<form action='AnimeDetails.php' method='POST' enctype='multipart/form-data'> " . $row1["Name"] . " <input type='submit' name='submit' value=\"" . $row1["idAnime"] . "\"> </form>" ;

                }
//            $sql = "SELECT idAnime, Name FROM Anime WHERE idAnime= '$IDAni'";
//            $result = $conn->query($sql);
//            while ($row = $result->fetch_assoc()) {
//
//                echo "<option value=\"" . $row["idAnime"] . "\">" . $row["Name"] . "</option>";
//
//            }






            } else {
                echo "No data found in the database.";
            }
        }



    }
    else {
        echo "database error.";
    }





    ?>

</div>


<?php include 'Footer.php';?>

</body>
</html>