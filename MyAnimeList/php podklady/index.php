<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Database</title>
    
  <?php include 'conn.php';?>
    
</head>
<body>
<!-- ------------------------------------Aktivní session--------------------------------------------- -->
     <?php
    session_start();
    
    session_destroy(); 
    if(isset($_SESSION['username'])) {
        echo "<p>Welcome, ".$_SESSION['username']."</p>";
        echo '<img src="' .$_SESSION['profile_pic']. '" alt="Image">';
        echo '<a href="logout.php">Logout</a>';
    } else {
        echo '<br> <a href="login_page.php">Login</a> <br>';
        echo '<a href="register.php">Registrace</a>';
    }
    ?>
<!-- ------------------------------------Aktivní session--------------------------------------------- -->
    
    
<h1>Add New Film</h1>
<form action="add_film.php" method="POST">
    <label for="LENGTH">Délka:</label><br>
    <input type="text" id="LENGTH" name="LENGTH"><br>

    <label for="TITLE">Title:</label><br>
    <input type="text" id="TITLE" name="TITLE"><br>

    <label for="AUTHOR_idAUTHOR">Author:</label><br>
    <select id="AUTHOR_idAUTHOR" name="AUTHOR_idAUTHOR">
        <?php
        // Select all authors
        $sql = "SELECT idAUTHOR, NAME, SURNAME FROM AUTHOR";
        $result = $conn->query($sql);

        // Populate dropdown with authors from the database
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value=\"" . $row["idAUTHOR"] . "\">" . $row["NAME"] . " " . $row["SURNAME"] . "</option>";
            }
        } else {
            echo "<option value=\"\">No authors found</option>";
        }
        ?>
    </select>
    <br>
    <input type="submit" value="Add Film">
</form>

<h1>All Films</h1>

    <?php
    // Select all films from the database
    $sql = "SELECT * FROM film";
    $result = $conn->query($sql);

    // Display films
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<li>" . $row["TITLE"] . " (" . $row["AUTHOR_idAUTHOR"] . ")</li>";
        }
    } else {
        echo "0 results";
    }
    ?>
    <h1>Všechny obrázky</h1> 
    
        <?php
    $sql = "SELECT PATH FROM PICTURE";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Loop through each row and display the image
        while($row = $result->fetch_assoc()) {
            // Display the image
            echo '<img src="' . $row["PATH"] . '" alt="Image">';
        }
    } else {
        echo "No images found in the database.";
    }
    

    // Close database connection
    $conn->close();
    ?>

    
    
</body>
</html>
