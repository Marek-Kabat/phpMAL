<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'conn.php';?>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="style.css">

    <style>

    </style>
</head>
<body>
<?php include 'navbar.php';?>

<h1>Login</h1>
<form action="logindata.php" method="POST">
    <label for="Username">Username:</label><br>
    <input type="text" id="Username" name="Username"><br>

    <label for="Password">Password:</label><br>
    <input type="Password" id="Password" name="Password"><br>

    <input class="registerbtn" type="submit" value="Login">
</form>


<?php include 'Footer.php';?>

</body>
</html>