<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
    <link rel="stylesheet" href="navbar.css">

    <?php include 'conn.php';?>
    <?php include 'logindata.php';?>
    <?php include 'add_user.php';?>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            overflow-x: hidden;
        }

</style>
</head>
<body>

<?php include 'navbar.php';?>

<header>
    <h1>Welcome to AnimeList</h1>
</header>
<h2>Best place where you can track your Anime</h2>
<div>
    <h2 class="col-12">Our recommendations</h2>

    <?php
    //    $sql = "SELECT a.*, COUNT(ua.Anime_idAnime) AS total_users
    //FROM Anime a
    //LEFT JOIN User_has_Anime ua ON a.idAnime = ua.Anime_idAnime
    //GROUP BY a.idAnime
    //ORDER BY total_users DESC
    //LIMIT 10;";
    $sql = "SELECT idAnime, Name, Picture FROM Anime WHERE idAnime= 9 OR 
                                                           idAnime= 4 OR
                                                           idAnime= 6 OR
                                                           idAnime= 2 OR
                                                           idAnime= 1 OR
                                                           idAnime= 11 OR
                                                           idAnime= 12 OR
                                                           idAnime= 15 OR
                                                           idAnime= 5 OR
                                                           idAnime= 8";



    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div class='col-2'> <img style='width:225px;height:350px'  src=" . $row['Picture'] . "  > <br> <form action='AnimeDetails.php' method='POST' enctype='multipart/form-data'> " . $row["Name"] . " <input type='submit' name='submit' value=\"" . $row["idAnime"] . "\"> </form></div>";
        }
    } else {
        echo "0 results";
    }
    ?>

</div>



<?php include 'Footer.php';?>

</body>
</html>