<?php echo "This is testing the register controller";
$username = $_POST['username'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
// TODO: validate form
echo "Received data:\n";
echo "Username: " . $username . "\n";
echo "Password: " . $password . "\n";
echo "First Name: " . $firstName . "\n";
echo "Last Name: " . $lastName . "\n";
echo "Email: " . $email . "\n";
if (1 === 0) {
	echo '<script>';
	echo 'localStorage.setItem("registerremember", null);';
	echo '</script>';
}
?>
<script>
	console.log(localStorage.getItem("registerremember"));
</script>