<?php
    include 'header.php';
?>
	
    <div>
	
        <h3> Joey and Dan like dudes </h3>
        <div> 
            <form align = "CENTER" action = "scripts/login.script.php" method = "POST">
                <input type = "text" name = "uid" placeholder = "Username"><br>
                <input type = "password" name = "pwd" placeholder = "Password"><br>
                <button type = "submit">Login</button>
            </form>
            <br>
            <br>
        </div>
        <?php
            echo $_SESSION['id'];
        ?>
        <br>
        <div class = "signupButton">Don't Have an account</div>
        <div class = "signup">
            <form align = "CENTER" action = "scripts/signup.script.php" method="POST"> 
                <input type = "text" name = "first" placeholder = "First Name"><br>
                <input type = "text" name = "last" placeholder = "Last Name"><br>
                <input type = "text" name = "uid" placeholder = "Username"><br>
                <input type = "password" name = "pwd" placeholder = "Password"><br>
                <button type = "submit">Sign up</button>
            </form>
            <?php
                $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                if(strpos($url, 'error=empty') !== false){
                    echo 'Fill out all fields!';
                }
                if(strpos($url, 'error=username') !== false){
                    echo 'Username already taken';
                }
            ?>
        </div>
    </div>
    <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
    <script src = 'test.js'></script>
</body>
</html>
