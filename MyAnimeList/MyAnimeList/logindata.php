<?php
session_start();
include 'conn.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Kontrola loginu - pokud není username prázdné a password není prázdný 
    if (!empty($username) && !empty($password)) {
      
        //Najdeme v databázi uživatele s stejným username a heslem. Je tedy nutné aby existoval záznam kde se hodnoty shodují s tím co jsme zadali na webu
        $sql = "SELECT * FROM User WHERE UserName='$username' AND Password='$password'";
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        $IdUser= $row['idUser'];

        //Pokud jsme uživatele našli/ respektive pokud existuje alespoň jeden záznam
        if ($result->num_rows == 1) {
            //$sql = "SELECT UserName FROM User WHERE UserName='$username' AND Password='$password'";
           // $result = $conn->query($sql);
           // $row = $result->fetch_assoc();
           // $user = $row['UserName'];

            $_SESSION['username'] = $username;
            $_SESSION['iduser'] = $IdUser;

//            echo "<p>Welcome, ".$_SESSION['username']."</p>";
            $_SESSION['login'] = 1;
            header("Location: Profile.php");


        } else {
            // Špatně zadané hodnoty
            echo "Wrong credentials";
        }
    } else {
        echo "You must enter username and password";
    }
}

?>
