<?php

include 'conn.php';
session_start();

if(isset($_POST['search'])) {
    $Search = $_POST['search'];
    $sql = "SELECT Name FROM Anime WHERE Name = '$Search'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Loop through each row and display the image
        $_SESSION['name'] = $Search;
//        echo "<p>Name: ".$_SESSION['name']."</p>";
        header("Location: AnimeDetails.php");

//        echo '<br> <a href="AnimeDetails.php">click here to continue</a> <br>';

    } else {
        echo "No data found in the database.";
    }
}
else {
    echo "database error.";
}





?>
