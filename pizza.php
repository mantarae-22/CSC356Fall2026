<?php  // uncomment extension_dir = "ext"
    require_once "db_pass.php";

    // database connection info
    // you will probably use localhost for the host - do not use websitedezign unless you have reached out to me and I have set you up with your own database - you may need to specify the port: localhost:3306 or localhost:3307 if you have multiple databases, such as MySQL and MariaDB
    $host = "websitedezignz.com";
    // use the name of the database you set up on your computer or web host - don't use the same db name that I am using
    $db = "websited_csc356_fa26";
    // if database is installed locally, your user name is probably root - don't use this user name, you will probably need to use root for a locally installed database
    $user = "websited_usrcsc356";
    // if you are sure that you did not set up a password in the database installation process for the root user, leave this empty
    $pass = $dbpass;

    // now we will set up a data source name
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

    // pdo is the modern/best way to connect to a database using PHP
    // set up some defaults so our code will be easier to work with
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    // we can connect directly to data in the database (once the connection is working)
    // however, we never want to write SQL statements like this because they can facilitate sql injection string attacks where a bot adds in more SQL to compromise the database
    $sql = "SELECT * FROM customer WHERE customer_id=" . $_GET["id"];


?>