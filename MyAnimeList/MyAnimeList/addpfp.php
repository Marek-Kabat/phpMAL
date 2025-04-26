<?php

include 'conn.php';
function uploadFile($file) {
    $target_dir = "pictures/"; // Napsat kam to chceme uploadnout
    $target_file = $target_dir . basename($file["name"]); // Úplná cesta k souboru
    $uploadOk = 1; // Natavení přepínače pro kontrolu že je vše ok
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // Získáme koncovku souboru

    // Kontrola zda je to obrázek
    $check = getimagesize($file["tmp_name"]);
    if($check !== false) {
        // File is an image
        $uploadOk = 1;
    } else {
        // File is not an image
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Kontrola velikosti souboru
    if ($file["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Povolení určitého typu souboru
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Kontrola uploadOK
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            // File uploaded successfully
            return $target_file;
        } else {
            // Error uploading file
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

if(isset($_POST['submit'])) {

    $picture_path = uploadFile($_FILES["picture"]);
    $userid = $_POST['user'];
    echo "ures";


    $sql = "UPDATE User SET Picture = '$picture_path' WHERE idUser = '$userid'";
    if ($conn->query($sql) === TRUE) {
        echo "error1";

//        header("Location: Profile.php");

    } else {
        echo "error2";
    }
} else {
    echo "error3";
}

$conn->close();


?>
