<?php
    include 'header.php';
?>
    <div>
        <h3> Login </h3>
        <div> 
            <form align = "CENTER" action = "scripts/login.script.php" method = "POST">
                <input type = "text" name = "uid" placeholder = "Username"><br>
                <input type = "password" name = "pwd" placeholder = "Password"><br>
                <button type = "submit">Login</button>
            </form>
            <br>
            <br>
        </div>
        <p>Sorry, but you have entered in the username or password wrong</p>
        <br>
        <a href = "signup.page.php">Don't have an account?</a>
    </div>
    

</body>
</html>