<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edwin Wallis' Website</title>
    <link rel="stylesheet" href="css/Styles.css">
</head>
<body>
    <div>
        <h3 align = "CENTER"> Login </h3>
        <div> 
            <form align = "CENTER" action = "login.php" method = "POST">
                <input type = "text" name = "uid" placeholder = "Username"><br>
                <input type = "password" name = "pwd" placeholder = "Password"><br>
                <button type = "submit">Login</button>
            </form>
            <?php 
                if ( isset($_SESSION['id']) ) {
                    echo $_SESSION['id'];
                }
            ?>
            <p> Sorry that's a the wrong password or username</p>
            <br>
            <br>
            <a align = "CENTER" href = "signup.page.php">Dont have an account?</a>
        </div>
        <br>
        <form action = "logout.script.php">
            <button> Log out </button>
        </form>
    </div>
    

</body>
</html>
