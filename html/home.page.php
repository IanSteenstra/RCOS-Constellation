<?php
    include 'header.php';
?>
<div>
	<h3> Logged in </h3>
	<?php
		echo "Welcome ";
		echo $_SESSION['first']
	?>
	<div style = "background:#777777">
		<h1>Classes</h1>
		<p> English: 87% </p>
		<p> History: 90% </p>
		<p> GPA: 4.0 </p>
 		<br>
		<a href = "addclass.page.php">Add classes</a>


	</div>
	<br><br><br><br>
	<form action ="scripts/logout.script.php">
		<button>Logout</button>
	</form>
</div>	
</body>
</html>