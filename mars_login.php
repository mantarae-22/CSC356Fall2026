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

    <!-- TODO: move to an external CSS file -->
    <style>
        header{
            text-align: center;
        }
        form{
            max-width: 400px;
            background-color: rgb(243, 117, 117);
            color: indigo;
            border-radius: 10px;
            text-align: center;
            border: 2px solid orange;
            margin: 0 auto;
        }

        form div{
            padding: 10px;
        }
    </style>

</head>
<body>
   <header>
        <?php include 'mars_menu.php'; ?>
        <h1>Login to the Employee Portal</h1>
    </header>
    <main>
        <!-- we need a form with 2 inputs - 1 should use the password input -->
        <div id="divMsg"></div>

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