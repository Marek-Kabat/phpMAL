<?php
include 'conn.php';
session_start();

if(isset($_POST['submit'])) {
    $idUser= $_SESSION['iduser'];
    $idAnime= $_SESSION['idAnime'];



    $sql = "INSERT INTO User_has_Anime (User_idUser, Anime_idAnime) VALUES ('$idUser', '$idAnime')";
    if ($conn->query($sql) === TRUE) {
        header("Location: Profile.php");

    } else{
        echo '<a> error</a>';
    }

}
?>