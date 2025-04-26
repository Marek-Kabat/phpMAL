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
    <h1>Top 10 Anime</h1>
</header>

<div >
    <?php
//    $sql = "SELECT a.*, COUNT(ua.Anime_idAnime) AS total_users
//FROM Anime a
//LEFT JOIN User_has_Anime ua ON a.idAnime = ua.Anime_idAnime
//GROUP BY a.idAnime
//ORDER BY total_users DESC
//LIMIT 10;";
    $sql = "SELECT a.idAnime, a.Name, a.Picture, COUNT(ua.Anime_idAnime) AS total_users
FROM Anime a
LEFT JOIN User_has_Anime ua ON a.idAnime = ua.Anime_idAnime
GROUP BY a.idAnime
ORDER BY total_users DESC
LIMIT 10;";



    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div class='col-2'> <img style='width:225px;height:350px'  src=" . $row['Picture'] . "  > <br> <form action='AnimeDetails.php' method='POST' enctype='multipart/form-data'> " . $row["Name"] . " <input type='submit' name='submit' value=\"" . $row["idAnime"] . "\"> </form> <p>Total users: " . $row["total_users"] ."</p> </div>";
        }
    } else {
        echo "0 results";
    }
    ?>

</div>

<?php include 'Footer.php';?>

</body>
</html>