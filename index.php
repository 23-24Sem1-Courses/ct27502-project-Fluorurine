<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Load Jquerry and Tailwind -->
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<!-- Load thành phần của Flowbite để tạo chức năng không cần JS -->
	<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
	<title>Web bán quần áo</title>
</head>

<body>


	<?php
	include 'vendor/autoload.php';


	session_start();

	$request = $_SERVER['REQUEST_URI'];
	$path = parse_url($request, PHP_URL_PATH);
	$filename = basename($path, ".php");
	$viewDir = __DIR__ . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR;

	// Render phần header tuỳ vào điều kiện đăng nhập
	if (1 == 1) {
		require  $viewDir . 'header.php';
	}
	switch ($filename) {
		case '':
			require $viewDir . 'home.php';
			break;
			// View
		case 'login':
			require  $viewDir . 'login.php';
			break;
		case 'logininfo':
			require $viewDir . 'logininfo.php';
			break;
		case 'register':
			require  $viewDir . 'register.php';
			break;
		case 'logout':
			require $viewDir . 'logout.php';
			break;
		case 'account':
			require  $viewDir . 'account.php';
			break;
		case 'cart':
			require  $viewDir . 'cart.php';
			break;
		case 'test':
			require  $viewDir . 'test.php';
			break;
		case 'category':
			require  $viewDir . 'category.php';
			break;
		case 'productdetail':
			require  $viewDir . 'productdetail.php';
			break;
		case 'productinfo':
			require  $viewDir . 'productinfo.php';
			break;
		case 'adminproduct':
			require  $viewDir . 'Admin' . DIRECTORY_SEPARATOR . 'AdminProduct.php';
			break;
		case "adminupdate":
			require  $viewDir . 'Admin' . DIRECTORY_SEPARATOR . 'AdminUpdateProduct.php';
			break;
		case 'admincreate':
			require  $viewDir . 'Admin' . DIRECTORY_SEPARATOR . 'AdminCreateProduct.php';
			break;

			//Error View
		default:
			require $viewDir . '404.php';
			break;
	}
	if (1 == 1) {
		require  $viewDir . 'footer.php';
	}
	?>
</body>

</html>