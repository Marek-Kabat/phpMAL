<?php
session_start();
include 'conn.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['USERNAME'];
    $password = $_POST['PASSWORD'];

    // Kontrola loginu - pokud není username prázdné a password není prázdný 
    if (!empty($username) && !empty($password)) {
      
        //Najdeme v databázi uživatele s stejným username a heslem. Je tedy nutné aby existoval záznam kde se hodnoty shodují s tím co jsme zadali na webu
        $sql = "SELECT * FROM USER WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        //Pokud jsme uživatele našli/ respektive pokud existuje alespoň jeden záznam
        if ($result->num_rows == 1) {
            // Nastavíme první session proměnnou a to username a přesměrujeme na hlavní stránku
            $sql = "SELECT PICTURE_idPICTURE FROM USER WHERE username='$username' AND password='$password'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $ID_PIC = $row['PICTURE_idPICTURE'];
            
            $sql = "SELECT PATH FROM PICTURE WHERE idPICTURE='$ID_PIC'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $PROFILE_PIC = $row['PATH'];
            
            
            
            $_SESSION['username'] = $username;
            $_SESSION['profile_pic'] = $PROFILE_PIC;
            
            echo '<br> <a href="index.php">Main page</a> <br>';    
        } else {
            // Špatně zadané hodnoty
            echo "Špatně zadané údaje";
        }
    } else {
        echo "Musíte zadat username a heslo";
    }
}

?>
