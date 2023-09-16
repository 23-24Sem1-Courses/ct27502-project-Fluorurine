<?php
require "../vendor/autoload.php";

use Model\UserModel;

function sanitizeInput($input)
{
	// Perform custom sanitization operations
	$sanitizedInput = trim($input);
	$sanitizedInput = htmlspecialchars($sanitizedInput);
	return $sanitizedInput;
}
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['r_password'])) {
	$errorflag = false;
	// Santize the data
	$username = sanitizeInput($_POST['username']);
	$password = sanitizeInput($_POST['password']);
	$firstName = sanitizeInput($_POST['firstName']);
	$lastName = sanitizeInput($_POST['lastName']);
	$email = sanitizeInput($_POST['email']);
	$r_password = sanitizeInput($_POST['r_password']);

	if ((strlen($password) < 6 || strlen($password) > 50) && $errorflag == false) {
		echo '<script>alert("Lỗi: Độ dài mật khẩu không hợp lệ (>=6 và <= 50)");</script>';
		$errorflag = true;
	}
	if ($password != $r_password && $errorflag == false) {
		echo '<script>alert("Lỗi: Mật khẩu không trùng khớp");</script>';
		$errorflag = true;
	}
	if ((strlen($username) < 3 || strlen($username) > 50) && $errorflag == false) {
		echo '<script>alert("Lỗi: Tên tài khoản không hợp lệ (>=3 và <= 50)");</script>';
		$errorflag = true;
	}
	if ((!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) && $errorflag == false) {
		echo '<script>alert("Lỗi: Email không hợp lệ");</script>';
		$errorflag = true;
	}
	if (((strlen($firstName) < 3 || strlen($firstName) > 50) || (strlen($lastName) < 3 || strlen($lastName) > 50)) && $errorflag == false) {
		echo '<script>alert("Lỗi: Độ dài họ hoặc tên không hợp lệ (>=3 và <= 50)");</script>';
		$errorflag = true;
	}

	if ($errorflag == false) {
		try {
			$test = new UserModel();
			$test->create($firstName, $lastName, $username, $email, $password);
			// Xoá local Storage để người dùng thay đổi
			echo '<script>';
			echo 'localStorage.setItem("registerremember", null);';
			echo '</script>';
			header("Location: login.php");
			exit;
		} catch (Exception $e) {
			echo "Có lỗi khi truy xuất dữ liệu rồi";
		}
	} else {

		echo '<script>window.location.href = "http://ct275.localhost/register.php";</script>';
	}
	// TODO: validate form
	// echo "Received data:\n";
	// echo "Username: " . $username . "\n";
	// echo "Password: " . $password . "\n";
	// echo "First Name: " . $firstName . "\n";
	// echo "Last Name: " . $lastName . "\n";
	// echo "Email: " . $email . "\n";

} else {

	echo '<script>alert("Lỗi: Vui lòng điền đầy đủ tất cả các trường.");</script>';
	echo '<script>window.location.href = "http://ct275.localhost/register.php";</script>';
}
?>
<script>
	console.log(localStorage.getItem("registerremember"));
</script>