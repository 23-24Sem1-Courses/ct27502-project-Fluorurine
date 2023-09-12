<?php
require "vendor/autoload.php";

use Model\Database;
// require "Model/DataConn.php";

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
	// Retrieve the values from session variables
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];

	// Echo the values
	echo "Username: " . $username . "<br>";
	echo "Password: " . $password . "<br>";
} else {
	echo "Username and password not found in session.";
	// echo "<a href='Controller/loginController.php'>Click me</a>";
	// require $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . "login.php";
}

?>
<html>
<form action="Controller/loginController.php" method="post" id="testForm">
	<input type="text" id="username" name="username">
	<input type="text" name="password" id="password">
	<input type="submit">
</form>

</html>
<script>
	// $(document).ready(function() {
	// 	$('#testForm').on('submit', function(event) {
	// 		var username = $('#username').val();
	// 		var password = $('#password').val();
	// 		var firstName = $('#firstName').val();
	// 		var lastName = $('#lastName').val();

	// 		var formData = {
	// 			username: username,
	// 			password: password,
	// 			firstName: firstName,
	// 			lastName: lastName
	// 		};
	// 		alert(username + password);
	// 		alert("Here")

	// 		$('#testForm').unbind('submit').submit();
	// 	});
	// })
</script>