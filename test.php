<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}

?>
<!DOC_TYPE html>
<html lang = "eg">
<h3>Test</h3><?php echo htmlspecialchars($_SESSION['username']); ?>



</html>