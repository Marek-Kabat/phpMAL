<!DOCTYPE html>
<html>
<head>
    <title>SearchGenre</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <?php include 'conn.php';?>

    <link rel="stylesheet" href="style.css">
    <style>

        .button {
            {border-radius: 8px;}
            background-color: white;
            color: black;
            border: 2px solid darkviolet; /* Green */
            transition-duration: 0.4s;
            width: 150px;

        }
        .button:hover {
            background-color: darkviolet; /* Green */
            color: white;
        }
    </style>
</head>
<body>
<?php include 'navbar.php';?>

<header>
    <h1>Search</h1>
</header>

<div class="container">

    <form action="Search.php" method="POST">
        <label for="search">Search for Anime</label><br>
        <input type="search" id="search" name="search">

    </form>

</div>
<div>

    <div class="col-2">
    <form  action="SearchResult.php" method="POST" enctype="multipart/form-data">
        <input class="button" type="submit" name="submit" value="Drama"><br>
    </form>
    </div>
    <div class="col-2">
    <form action="SearchResult.php" method="POST" enctype="multipart/form-data">
        <input class="button" type="submit" name="submit" value="Action"><br>
    </form>
    </div>
    <div class="col-2">
    <form action="SearchResult.php" method="POST" enctype="multipart/form-data">
        <input class="button" type="submit" name="submit" value="Adventure"><br>
    </form>
    </div>
    <div class="col-2">
    <form action="SearchResult.php" method="POST" enctype="multipart/form-data">
        <input class="button" type="submit" name="submit" value="Comedy"><br>
    </form>
    </div>
    <div class="col-2">
    <form action="SearchResult.php" method="POST" enctype="multipart/form-data">
        <input class="button" type="submit" name="submit" value="Horror"><br>
    </form>
    </div>
    <div class="col-2">
    <form action="SearchResult.php" method="POST" enctype="multipart/form-data">
        <input class="button" type="submit" name="submit" value="Romance"><br>
    </form>
    </div>
    <div class="col-2">
    <form action="SearchResult.php" method="POST" enctype="multipart/form-data">
        <input class="button" type="submit" name="submit" value="Mystery"><br>
    </form>
    </div>
    <div class="col-2">
    <form action="SearchResult.php" method="POST" enctype="multipart/form-data">
        <input class="button" type="submit" name="submit" value="Sliceoflife"><br>
    </form>
    </div>
    <div class="col-2">
    <form action="SearchResult.php" method="POST" enctype="multipart/form-data">
        <input class="button" type="submit" name="submit" value="SciFi"><br>
    </form>
    </div>
    <div class="col-2">
    <form action="SearchResult.php" method="POST" enctype="multipart/form-data">
        <input class="button" type="submit" name="submit" value="Supernatural"><br>
    </form>
    </div>
</div>



<?php include 'Footer.php';?>


<!--<script>-->
<!--    function Genre(genre){-->
<!--        $_SESSION['genre'] = genre;-->
<!---->
<!--    }-->
<!---->
<!--</script>-->
</body>
</html>