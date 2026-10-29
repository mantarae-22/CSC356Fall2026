<?php
    // this variable will hold a message that is shown to the user
    $message = "";
    
    // check if this is a post back
    if ($_SERVER['REQUEST_METHOD'] == "POST"){       
        // user name variable to hold what info the user typed in for their username
        $username = $_POST["txtUserName"];
        $password = $_POST["pwdUser"];

        echo "username: " . $username . "<BR>";
        echo "password: " . $password. "<BR>";

        # get a connection to the database - required for the rest of this code to work, and we only need to start the connection 1 time
        require_once "db_conn.php";

        # create an sql statement to see if a valid username and password were entered
        $sql = "SELECT user_id FROM user_info WHERE user_name = :user_name AND password = :password;";

        // prepare the statement
        $stmt = $pdo->prepare($sql);

        // execute and pass in the values
        $stmt->execute(["user_name" => $username, "password" => $password]);

        // fetch the results
        $users = $stmt->fetchAll();

        foreach ($users as $user){
            echo $user["user_id"] . "<BR>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Login</title>
    <!-- link to the external css file -->
    <link rel="stylesheet" href="mars.css">
    <!-- link to the JavaScript file; defer to wait to run the JavaScript code until all of the HTML elements have loaded -->
    <script src="mars.js" defer></script>
</head>
<body>
   <header>
        <?php include 'mars_menu.php'; ?>
        <h1>Login to the Employee Portal</h1>
    </header>
    <main>
        <!-- we need a form with 2 inputs - 1 should use the password input -->
         <!-- this div would first show any messages from the JavaScript validation. If the JS validation returns true, then the form will post and any PHP errors would then be shown here -->
        <div id="divMsg"><?php echo $message ?></div>

        <form name="frmLogin" id="frmLogin" action="mars_login.php" method="post" onsubmit="return validateLoginForm();">
            <div>
                <label for="txtUserName" id="lblUserName" name="lblUserName">User Name:</label>
                <input type="text" id="txtUserName" name="txtUserName" required>                
            </div>

            <div>
                <label for="pwdUser" id="lblPassword" name="lblPassword">Password:</label>
                <input type="password" id="pwdUser" name="pwdUser">
            </div>

            <div>
                <button type="submit" id="btnSubmit" name="btnSubmit">Login</button>
            </div>
        </form>
    </main>
</body>
</html>