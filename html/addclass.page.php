<?php
    include 'header.php';
?>  

	<div>   
		<h3>Add a class</h3>
		      <form method="POST"> 
                <input type = "text" name = "name" placeholder = "Class Name"><br><br>

                <a> Tests</a>
                <input min = "0" max = "100" type = "number" name = "ptest" placeholder = "Percentage of Grade"><br>

                <a> Quizzies</a>
                <input min = "0" max = "100" type = "number" name = "pquiz" placeholder = "Percentage of Grade"><br>

                <a> Homework</a>
                <input min = "0" max = "100" type = "number" name = "phomework" placeholder = "Percentage of Grade"><br>

                <a> Exams </a>
                <input min = "0" max = "100" type = "number" name = "pexams" placeholder = "Percentage of Grade"><br>

                <a> Projects </a>
                <input min = "0" max = "100" type = "number" name = "pprojects" placeholder = "Percentage of Grade"><br>

                <input id = "context" type = "text" name = "other1" placeholder = "Other"> 
                <input min = "0" max = "100" type = "number" name = "pother1" placeholder = "Percentage of Grade"><br>

                <button type = "submit">Add Class!</button>
            </form>
	</div>
</body>
</html>
