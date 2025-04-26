<?php
session_start();

include 'conn.php';

if(isset($_POST['submit'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $email = $_POST['email'];
    $Tel = $_POST['Tel'];
    $City = $_POST['City'];
    $Country = $_POST['Country'];
    $Picture = $_POST['picture'];

    $sql = "INSERT INTO Information (Tel, Name, Surname, City, Country) VALUES ('$Tel', '$Name', '$Surname', '$City', '$Country')";
    if ($conn->query($sql) === TRUE) {
        $IDInfo_User = $conn->insert_id;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

// PÃ…â„¢ÃƒÂ­kaz pro databÃƒÂ¡zi

    $sql = "INSERT INTO User (UserName, Password, Email, Picture, Information_idInformation) VALUES ('$Username', '$Password', '$email', '$Picture', '$IDInfo_User')";
    if ($conn->query($sql) === TRUE) {
        $IDUser = $conn->insert_id;
        $_SESSION['username'] = $Username;
        $_SESSION['iduser'] = $IDUser;
        $_SESSION['login'] = 1;
        header("Location: Profile.php");

//    echo "<p>Welcome, ".$_SESSION['username']."</p>";
//
//    echo '<br> <a href="Profile.php">click here to continue</a> <br>';
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
