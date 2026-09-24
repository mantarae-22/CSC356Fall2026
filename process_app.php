<?php
    // declaring a variable here that will be used in the if/else code
    $message = "";

    // check to see if this is a post request; if so, we can grab the form info
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // get the name of the user
        // TODO: add the isset ternary operator
        $full_name = $_POST["txtName"];
        $num_years = $_POST["numYears"];

        $message = "Your name: " . $full_name . " Years of Experience: " . $num_years;
    }
    // you cannot access this page directly
    else{
        $message = "You cannot access this page right now.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Received!</title>
    <!-- link to the external css file -->
    <link rel="stylesheet" href="mars.css">
</head>
<body>
    <header>
        <?php include 'mars_menu.php'; ?>
        <h1>Pilot Application</h1>
    </header>
    <main>
        Thank you for applying!

        <!-- show the message we built in the php code -->
        <?php echo $message; ?>
    </main>
</body>
</html>