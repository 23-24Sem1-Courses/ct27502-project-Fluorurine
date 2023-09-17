<?php
session_start();
echo "Welcome to Login Controller";
// echo  $_POST["username"];
// echo $_POST["password"];
require_once "../vendor/autoload.php";

use Model\UserModel;

if (isset($_POST["username"]) && isset($_POST["password"]) && strlen($_POST["username"]) > 0 && strlen($_POST["password"]) > 0) {
	$sanitizedUsername = htmlspecialchars($_POST["username"], ENT_QUOTES, 'UTF-8');

	$resultArray = (new UserModel())->read($_POST["username"]);
	$username;
	$password;
	foreach ($resultArray as $row) {
		// Kiểm tra trên tất cả dòng nếu mật khẩu và tên người dùng giống nhau thì trả về giá trị
		// Nêú bất kì giá trị nào khác thì trả về
		if ($row['username'] == $sanitizedUsername && $row['passwd'] == $_POST["password"]) {
			$username = $row['username'];
			$password = $row['passwd'];
		}
	}
	if (!empty($username) && !empty($password)) {
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header("Location: http://ct275.localhost/logininfo.php");
	} else {

		header("Location: http://ct275.localhost/login.php");
	}
}

// $_SESSION['username'] = $username;
// $_SESSION['password'] = $password;
