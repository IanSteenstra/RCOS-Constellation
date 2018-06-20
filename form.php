<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$projectNameErr = $minGPAErr = $minYearErr = $maxYearErr = $minExpErr = $keywordsErr = $classesErr = "";
$projectName = $minGPA = $minYear = $maxYear = $minExp = $keywords = $classes = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["projectName"])) {
	$projectNameErr = "Project name is required";
	}
	$projectName = test_input($_POST["projectName"]);
	if (empty($_POST["minGPA"])) {
	    $minGPAErr = "Minimum GPA is required";
	  }  
	$minGPA = test_input($_POST["minGPA"]); 
	if (empty($_POST["minYear"])) {
	    $minYearErr = "Minimum year is required";
	  } 
	$minYear = test_input($_POST["minYear"]);
	if (empty($_POST["maxYear"])) {
	    $maxYearErr = "Maximum year is required";
	  } 
	$maxYear = test_input($_POST["maxYear"]); 
	if (empty($_POST["minExp"])) {
	    $minExpErr = "Minimum experience is required";
	  } 
	$minExp = test_input($_POST["minExp"]);
	if (empty($_POST["keywords"])) {
	    $keywordsErr = "At least one keyword required";
	  } 
	$keywords = test_input($_POST["keywords"]);
	if (empty($_POST["classes"])) {
	    $classesErr = "At least one class is required";
	  } 
	$classes = test_input($_POST["classes"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Research Project Form</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Project Name: <input type="text" name="projectName" value="<?php echo $projectName;?>">
  <span class="error">* <?php echo $projectNameErr;?></span>
  <br><br>
  Minimum GPA: <input type="text" name="minGPA" value="<?php echo $minGPA;?>">
  <span class="error">* <?php echo $minGPAErr;?></span>
  <br><br>
  Minimum Class Year: <input type="text" name="minYear" value="<?php echo $minYear;?>">
  <span class="error">* <?php echo $minYearErr;?></span>
  <br><br>
  Maximum Class Year: <input type="text" name="maxYear" value="<?php echo $maxYear;?>">
  <span class="error">* <?php echo $maxYearErr;?></span>
  <br><br>
  Minimum Experience: <input type="text" name="minExp" value="<?php echo $minExp;?>">
  <span class="error">* <?php echo $minExpErr;?></span>
  <br><br>
  Keywords: <input type="text" name="keywords" value="<?php echo $keywords;?>">
  <span class="error">* <?php echo $keywordsErr;?></span>
  <br><br>
  Classes: <input type="text" name="classes" value="<?php echo $classes;?>">
  <span class="error">* <?php echo $classesErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $projectName;
echo "<br>";
echo $minGPA;
echo "<br>";
echo $minYear;
echo "<br>";
echo $maxYear;
echo "<br>";
echo $minExp;
echo "<br>";
echo $keywords;
echo "<br>";
echo $classes;

$servername = "localhost";
$username = "root";
$password = "Skyguitar1";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO research_projects (pname, minGPA, minYear, maxYear, minExp, keywords, classes)
VALUES('$projectName', '$minGPA', '$minYear', '$maxYear', '$minExp', '$keywords', '$classes')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>