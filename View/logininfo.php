<?php if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
	// Retrieve the values from session variables
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];

	// Echo the values
	echo "Username: " . $username . "<br>";
	echo "Password: " . $password . "<br>";
} else {
	echo "Username and password not found in session.";
	echo "<a href='Controller/loginController.php'>Click me</a>";
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
	$(document).ready(function() {
		// Submit form on button click
		$('#testForm').on('submit', function(event) {
			// Prevent form from submitting

			// Get form data
			var username = $('#username').val();
			var password = $('#password').val();
			var firstName = $('#firstName').val();
			var lastName = $('#lastName').val();

			var formData = {
				username: username,
				password: password,
				firstName: firstName,
				lastName: lastName
			};
			alert(username + password);
			alert("Here")

			$('#testForm').unbind('submit').submit();

			// $.ajax({
			// 	url: './view/account.php',
			// 	method: 'POST',
			// 	data: formData,
			// 	success: function(response) {
			// 		console.log("Here");
			// 		console.log(response);
			// 	},
			// 	error: function(response) {}
			// });
		});
	})
</script>