<?php 

include 'conn.php';

    // Get form data - Přenášíme data mezi index.php a add_film.php 
    $LENGTH = $_POST['LENGTH'];
    $TITLE = $_POST['TITLE'];
    $AUTHOR_idAUTHOR = $_POST['AUTHOR_idAUTHOR'];



$sql = "INSERT INTO FILM (TITLE, LENGTH, AUTHOR_idAUTHOR, PICTURE_idPICTURE) VALUES ('$TITLE', '$LENGTH', '$AUTHOR_idAUTHOR', '1')";

if ($conn->query($sql) === TRUE) {
            echo "New film added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    $conn->close();
?>
