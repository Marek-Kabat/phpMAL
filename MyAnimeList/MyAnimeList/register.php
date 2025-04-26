<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'conn.php';?>
    <?php include 'logindata.php';?>
    <?php include 'add_user.php';?>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="style.css">

    <style>

    </style>
</head>
<body>
<?php include 'navbar.php';?>

<h1>Registration</h1>
<form action="add_user.php" method="post" enctype="multipart/form-data">
    Username: <input type="text" name="Username" required><br>
    Name: <input type="text" name="Name" required><br>
    Surname: <input type="text" name="Surname" required><br>
    Password: <input type="password" name="Password" required><br>
    email: <input type="text" name="email" required><br>
    Tel: <input type="text" name="Tel" required><br>
    City: <input type="text" name="City" required><br>
    Country: <input type="text" name="Country" required><br>
    <input type="hidden" name="picture" value="zero.jpg">

    <input class="registerbtn" type="submit" name="submit" value="Register">
</form>



<?php include 'Footer.php';?>

</body>
</html>