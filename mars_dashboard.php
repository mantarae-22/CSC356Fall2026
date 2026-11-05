<?php
// you must call session_start on any page where you need to use the session
session_start();

// check to see if the user is logged in
/*if (isset($_SESSION["user_id"])){
    echo "Welcome, " . $_SESSION["user_name"];
}
else{
    // send the user back to the login page - this is expected bahavior, but not required
    header("Location: mars_login.php");
}*/

// if the session user id is empty, redirect the user to the login page
if (!isset($_SESSION["user_id"])){
    header("Location: mars_login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Dashboard</title>
    <!-- link to the external css file -->
    <link rel="stylesheet" href="mars.css">
</head>
<body>
    <header>
        <?php include 'mars_menu.php'; ?>
        <h1><?php echo "Welcome, " . $_SESSION["user_name"]; ?></h1>
    </header>
    <main>
        <h2>Here are the training manuals for the Mars pilots</h2>
    </main>
</body>
</html>