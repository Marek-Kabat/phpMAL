<!DOCTYPE html>
<html>
<head>
    <title>Anime</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'conn.php';?>
    <?php include 'Search.php';?>


<!--    --><?php //include 'Genre.php';?>


    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="style.css">

    <style>

    </style>
</head>

<body>
<?php include 'navbar.php';?>

<?php

//include 'SearchResult.php'

if(isset($_POST['submit'])) {
    $Search = $_POST['submit'];
    $sql = "SELECT idAnime, Name FROM Anime WHERE idAnime= '$Search'";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    $IDANIME= $row['idAnime'];
    $_SESSION['idAnime'] = $IDANIME;

    echo "<h1> " . $row['Name'] . "</h1>";

} else{
    $Search = $_SESSION['name'];
    $sql = "SELECT idAnime, Name FROM Anime WHERE Name= '$Search'";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    $IDANIME= $row['idAnime'];
    $_SESSION['idAnime'] = $IDANIME;

    echo "<h1> " . $row['Name'] . "</h1>";
}

?>



<div>
    <div class="col-4">
        <?php

        $sql = "SELECT Picture FROM Anime WHERE idAnime= '$IDANIME'";
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        echo " <img src=" . $row['Picture'] . "> <br>";


        ?>

    </div>
    <div class="col-4">
        <h2>Information</h2>

        <?php

        $sql = "SELECT HowLong_idHowLong FROM Anime WHERE idAnime= '$IDANIME'";
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        $idLong = $row['HowLong_idHowLong'];
        $sql = "SELECT HowLong, Eps FROM HowLong WHERE idHowLong= '$idLong'";
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        echo "<p> min. per episode: " . $row['HowLong'] . " min.</p>";
        echo "<p> episode count: " . $row['Eps'] . "ep.</p>";



        ?>
    </div>
    <div class="col-4">
        <h2>Description</h2>
        <?php

        $sql = "SELECT Description FROM Description WHERE idDescription= '$IDANIME'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo "<p> " . $row['Description'] . "</p>";

        ?>
    </div>
</div>
<div>
    <?php
    if($_SESSION['login']==1){
        $idUser= $_SESSION['iduser'];
        $sql = "SELECT * FROM User_has_Anime WHERE Anime_idAnime= '$IDANIME' AND User_idUser= '$idUser'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            echo "<p>Anime already added!</p>";
        } else{
            echo "<form action='addanime.php' method='POST' enctype='multipart/form-data'>  <input type='submit' name='submit' value=add> </form>";

        }
    }
    ?>
</div>
<div class="col-12">

    <h2>Reviews</h2>
    <?php
    session_start();
    if($_SESSION['login']==1) {
        echo "<form action='add_review.php' method='post' enctype='multipart/form-data'>
        <input type='hidden' name='idanime' value='$IDANIME'>
        <label for='review'>Review:</label><br>
        <input type='text' id='review' name='review'><br>
        <label for='stars'>How many stars?</label>
        <select id='stars' name='stars' class='select'>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
        </select>
        <input type='submit' name='submit' value='submit'>
    </form>";

    }


    ?>
<!--    <form action="add_review.php" method="post" enctype="multipart/form-data">-->
<!--        <input type="hidden" name="idanime" value="--><?php //echo "$IDANIME" ?><!--">-->
<!--        <label for="review">Review:</label><br>-->
<!--        <input type="text" id="review" name="review"><br>-->
<!--        <label for="stars">How many stars?</label>-->
<!--        <select id="stars" name="stars" class="select">-->
<!--            <option value="1">1</option>-->
<!--            <option value="2">2</option>-->
<!--            <option value="3">3</option>-->
<!--            <option value="4">4</option>-->
<!--            <option value="5">5</option>-->
<!--        </select>-->
<!--        <input type="submit" name="submit" value="submit">-->
<!--    </form>-->
<!--    vypsani review-->

</div>
<div  >
    <?php
    $sql = "SELECT Review, Stars, User_idUser FROM Review WHERE Anime_idAnime= '$IDANIME'";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        $user = $row["User_idUser"];
        $sql1 = "SELECT UserName, Picture FROM User WHERE idUser= '$user'";
        $result1 = $conn->query($sql1);
        $row1 = $result1->fetch_assoc();
//        echo "<a><img style='width:200px;height:200px' src=" . $row['Picture'] . " ></a>";

        echo "<div class='col-12'> <h3> " . $row1["UserName"] . " <img style='width:30px;height:30px' src=" . $row1['Picture'] . " > Stars: " . $row["Stars"] . "</h3> <p>" . $row["Review"] ." </p></div>";

    }


    ?>
</div>
<?php include 'Footer.php';?>

</body>
</html>