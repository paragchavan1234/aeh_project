<?php
/* Initialize the session */
session_start();
 
/* Check if the user is logged in, if not then redirect him to login page */
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Heyy <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the site</h1>
    </div>
    <p>
        <a href="logout.php" class="btn btn-danger">You can sign out your account here</a>
    </p>
</body>
</html>