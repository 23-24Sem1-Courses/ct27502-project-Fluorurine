<?php
session_start();
require_once "../vendor/autoload.php";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	// Tuỳ theo action mà xử lý này
	if (!empty($_GET['action'])) {
		// Vẫn xài vòng lặp switch case để lặp qua các thể loại
		// $test = new ProductModel();
		if ($_GET['action'] === 'addcart' && !empty($_GET['id']) && !empty($_GET['quantity']) && $_GET['quantity'] > 0 && is_numeric($_GET('quantity')) && is_numeric($_GET['id'])) {
			if (!empty($_SESSION['cart'])) {
				// Nếu đã có trong mảng thì cộng thêm / thêm mới vào
				if (array_key_exists($_GET['id'], $_SESSION['cart'])) {
					$_SESSION['cart'][$_GET['id']] += $_GET['quantity'];
				} else {
					$_SESSION['cart'][$_GET['id']] = $_GET['quantity'];
				}
			} else {
				//  Nếu chưa có thì khỏi tạo mảng
				$_SESSION['cart'] = [];
				$_SESSION['cart'][$_GET['id']] = $_GET['quantity'];
			}
		}
		if ($_GET['action'] === 'delete' && !empty($_GET['id'])) {
			if (!empty($_SESSION['cart'] && array_key_exists($_GET['id'], $_SESSION['cart']))) {
				unset($_SESSION['cart'][$_GET['id']]);
			} else {
				$data = ["error" => "Không thể xoá đơn hàng"];
				$json = json_encode($data);
				header('Content-Type: application/json');
				echo $json;
			}
		}
		// Cái này đợi kết nối cơ sở dữ liệu nhé
		if ($_GET['action'] === 'readCart') {
			$data = $_SESSION['cart'];
			$json = json_encode($data);
			header('Content-Type: application/json');
			echo $json;
		}
		// try {

		// 	$json = json_encode($test->read($_GET['id']));
		// 	header('Content-Type: application/json');
		// 	echo $json;
		// } catch (Exception $e) {
		// 	echo '<script>alert("Lỗi truy xuất dữ liệu.");</script>';

		// 	echo '<script>window.location.href = "http://ct275.localhost/admincreate.php";</script>';
		// }

	} else {
		$data = ["error" => "Không thể thêm do lỗi"];
		$json = json_encode($data);
		header('Content-Type: application/json');
		echo $json;
	}
}
// Ngoài ra còn phần POST cơ sở dữ liệu thì để tại đây.

$colors = ["1", "2", "3", "4", "1", "5"];

$character = [
	"test1" => "Jane Doe",
	"25" => 30,
	"uwu" => "Software Engineer"
];

foreach ($character  as $key => $value) {
	echo "$key: $value\n";
}
unset($character["25"]);
$character["test2"] = "JMeera";
foreach ($character as $key => $value) {
	echo "$key: $value\n";
}
foreach ($colors as $key => $value) {
	echo "$key: $value\n";
	echo $value + 2;
}
