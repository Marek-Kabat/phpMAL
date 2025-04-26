<?php

session_destroy();
header("Location: login_page.php"); // Redirect to the login page after logout
exit();
?>
