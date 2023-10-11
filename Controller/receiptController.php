<?php
session_start();
require_once "../vendor/autoload.php";

use Model\ProductModel;
use Model\ReceiptModel;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	// Tuỳ theo action mà xử lý này
	if (!empty($_GET['action'])) {
		// Vẫn xài vòng lặp switch case để lặp qua các thể loại
		// $test = new ProductModel();
		if ($_GET['action'] == 'addcart' && !empty($_GET['id']) && !empty($_GET['quantity']) && $_GET['quantity'] > 0 && is_numeric($_GET['quantity']) && is_numeric($_GET['id'])) {
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

		if ($_GET['action'] === 'deleteproduct' && !empty($_GET['id'])) {
			if (!empty($_SESSION['cart'] && array_key_exists($_GET['id'], $_SESSION['cart']))) {
				unset($_SESSION['cart'][$_GET['id']]);
			} else {
				$data = ["error" => "Không thể xoá đơn hàng"];
				$json = json_encode($data);
				header('Content-Type: application/json');
				echo $json;
				exit;
			}
		}
		if ($_GET['action'] === 'getcart') {
			$productmodel = new ProductModel();
			try {
				$checkarray = [];

				if (!empty($_SESSION['cart'])) {
					$checkarray = $_SESSION['cart'];
				}

				$data = $productmodel->readFromArray($checkarray);
				// attach quantity from session to mathching product reutrn from php pdo
				if (sizeof($data) != 0) {
					foreach ($data as $key => $value) {
						$data[$key]["quantity"] = $_SESSION['cart'][$value["id"]];
					}
				}

				// print_r($data);
				$json = json_encode($data);
				header('Content-Type: application/json');
				echo $json;
			} catch (Exception $e) {
				$data = [];
				$json = json_encode($data);
				header('Content-Type: application/json');
				echo $json;
				exit;
			}
		}



		if ($_GET['action'] === 'changeCartQuantity') {
			if (!empty($_SESSION['cart'] && array_key_exists($_GET['id'], $_SESSION['cart']))) {
				$_SESSION['cart'][$_GET['id']] = $_GET['quantity'];
			} else {
				$data = ["error" => "Không thể sửa số lượng đơn hàng"];
				$json = json_encode($data);
				header('Content-Type: application/json');
				echo $json;
			}
		}
		if ($_GET['action'] == "addproduct") {
			if (!empty($_SESSION['cart'])) {
				// Nếu đã có trong mảng thì cộng thêm / thêm mới vào
				if (array_key_exists($_GET['id'], $_SESSION['cart'])) {
					$_SESSION['cart'][$_GET['id']] += 1;
				} else {
					$_SESSION['cart'][$_GET['id']] = 1;
				}
			}
		}

		if ($_GET['action'] == "subproduct") {
			if (!empty($_SESSION['cart'] && array_key_exists($_GET['id'], $_SESSION['cart']))) {
				if ($_SESSION['cart'][$_GET['id']] > 1) {
					$_SESSION['cart'][$_GET['id']] -= 1;
				}
			} else {
				$data = ["error" => "Không thể sửa số lượng đơn hàng"];
				$json = json_encode($data);
				header('Content-Type: application/json');
				echo $json;
			}
		}
		if ($_GET['action'] == "readReceiptByUser") {
			//validate if username exist
			$receiptmodel = new ReceiptModel();
			if (empty($_SESSION['username'])) {
				$data = [];
				$json = json_encode($data);
				header('Content-Type: application/json');
				echo $json;
				exit;
			}
			try {
				$data = $receiptmodel->readByUser($_SESSION['username']);
				$json = json_encode($data);
				header('Content-Type: application/json');
				echo $json;
			} catch (Exception $e) {
				$data = [];
				$json = json_encode($data);
				header('Content-Type: application/json');
				echo $json;
				exit;
			}
		}
		if ($_GET['action'] == 'readReceipt') {
			try {
				$data = $receiptmodel->readById($_GET['id']);
				$json = json_encode($data);
				header('Content-Type: application/json');
				echo $json;
			} catch (Exception $e) {
				$data = [];
				$json = json_encode($data);
				header('Content-Type: application/json');
				echo $json;
				exit;
			}
		}
	}
}
// handle create receeipt crud
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (!empty($_POST['action'])) {
		$receiptmodel = new ReceiptModel();
		if ($_POST['action'] == 'createReceipt') {

			try {
				if (empty($_SESSION['cart'])) {
					echo '<script>alert("Không có sản phẩm nào trong giỏ hàng.");</script>';
					echo '<script>window.location.href = "http://ct275.localhost/cart.php";</script>';
					exit;
				}
				if (empty($_SESSION['username'])) {
					echo '<script>alert("Bạn chưa đăng nhập.");</script>';
					echo '<script>window.location.href = "http://ct275.localhost/cart.php";</script>';
					exit;
				}
				if (empty($_POST['address'])) {
					echo '<script>alert("Bạn chưa nhập địa chỉ.");</script>';
					echo '<script>window.location.href = "http://ct275.localhost/cart.php";</script>';
					exit;
				}

				$receiptmodel->create($_SESSION['cart'], $_POST['address'], $_SESSION['username']);
				echo '<script>alert("Thêm thành công.");</script>';
				echo '<script>window.location.href = "http://ct275.localhost/cart.php";</script>';
				exit;
			} catch (Exception $e) {
				echo '<script>alert("Lỗi truy xuất dữ liệu.");</script>';
				echo '<script>window.location.href = "http://ct275.localhost/cart.php";</script>';
				exit;
			}
		}
		if ($_POST['action'] == 'readAllReceipt') {
			try {
				$data = $receiptmodel->readAll();
				$json = json_encode($data);
				header('Content-Type: application/json');
				echo $json;
			} catch (Exception $e) {
				$data = [];
				$json = json_encode($data);
				header('Content-Type: application/json');
				echo $json;
				exit;
			}
		}



		if ($_POST['action'] == 'deleteReceipt') {
			try {
				$receiptmodel->delete($_POST['id']);
				echo '<script>alert("Xoá thành công.");</script>';
				echo '<script>window.location.href = "http://ct275.localhost/adminreceipt.php";</script>';
				exit;
			} catch (Exception $e) {
				echo '<script>alert("Lỗi truy xuất dữ liệu.");</script>';
				echo '<script>window.location.href = "http://ct275.localhost/adminreceipt.php";</script>';
				exit;
			}
		}
		if ($_POST['action'] == 'checkout') {
			//check if user in session exist if not location to home page
			if (empty($_SESSION['username'])) {
				echo '<script>alert("Bạn chưa đăng nhập.");</script>';
				echo '<script>window.location.href = "http://ct275.localhost/cart.php";</script>';
				exit;
			}
			//check if cart is empty
			if (empty($_SESSION['cart'])) {
				echo '<script>alert("Không có sản phẩm nào trong giỏ hàng.");</script>';
				echo '<script>window.location.href = "http://ct275.localhost/cart.php";</script>';
				exit;
			}
			try {
				$receiptmodel->create($_SESSION['cart'], $_POST['address'], $_SESSION['username']);
			} catch (Exception $e) {
				echo '<script>alert("Lỗi thanh toán.");</script>';
				echo '<script>window.location.href = "http://ct275.localhost/cart.php";</script>';
				exit;
			}
		}
	}
}
