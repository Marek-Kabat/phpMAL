<?php
session_start();

include 'conn.php';

if(isset($_POST['submit'])) {
    $review = $_POST['review'];
    $star = $_POST['stars'];
    $idUser= $_SESSION['iduser'];
    $idAnime= $_POST['idanime'];

//    $IDReview = $conn->insert_id;


    $sql = "INSERT INTO Review (Review, Stars, Anime_idAnime, User_idUser) VALUES ('$review', '$star' , '$idAnime', '$idUser')";
    if ($conn->query($sql) === TRUE) {

        header("Location: Index.php");

    } else{
    }
}
echo "<a>not logged in</a>";
?>