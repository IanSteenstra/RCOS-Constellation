<?php
    include 'header.php';
?>
	<div>   
		<h3>Make An Account</h3>
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
            <br><br>
            <a href = "index.php">Already have an account?</a> 
	</div>
</body>
</html>
