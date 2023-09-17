<?php
// Nếu Post thì tạo sản phẩm
session_start();
require_once "../vendor/autoload.php";

use Model\ProductModel;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Không phải admin làm = quay trở lại
	// if (!isset($_SESSION['user']) || $_SESSION['username'] !== 'admin') {
	// 	header("Location: http://ct275.localhost/admincreate.php");
	// 	exit;
	// }
	if (!empty($_POST['productname']) || !empty($_POST['productprice']) || !empty($_POST['description']) || !empty($_POST['productcategory']) || !empty($_FILES['productimage']) || !empty($_POST["action"])) {
		// echo $_POST['productname'];
		// echo $_POST['productprice'];
		// echo $_POST['description'];
		// echo  $_POST['productcategory'];
		// echo $_FILES['productimage']['name'];
		try {
			$test = new ProductModel();
			$file = $_FILES['productimage'];
			$file_path = "http://ct275.localhost/public/" . $file['name'];
			if ($_POST["action"] == "create") {
				$test->create($_POST['productname'], $_POST['description'], $_POST['productcategory'], $_POST['productprice'], $file_path);
			}
			//TODO: Logic chỗ này là phải có thêm product ID
			if ($_POST["action"] == "update") {
				$test->update($_POST['productid'], $_POST['productname'], $_POST['description'], $_POST['productcategory'], $_POST['productprice'], $file_path);
			}
			//Xử lý File
			if ($file['error'] === UPLOAD_ERR_OK) {
				// Process the file (e.g., move it to a desired location)
				move_uploaded_file($file['tmp_name'], '../public/' . $file['name']);
			}
			// TODO: Thêm hàm vào này
			header("Location: http://ct275.localhost/adminproduct.php");
			echo '<script>alert("Thay đổi dữ liệu thành công	.");</script>';
			exit;
		} catch (Exception $e) {
			echo '<script>alert("Lỗi truy xuất dữ liệu.");</script>';

			echo '<script>window.location.href = "http://ct275.localhost/admincreate.php";</script>';
		}
	} else {

		echo '<script>alert("Lỗi: Vui lòng điền đầy đủ tất cả các trường.");</script>';
		echo '<script>window.location.href = "http://ct275.localhost/admincreate.php";</script>';
	}
}

//Tiếp theo xét các GET value hoặc ACTION để tuỳ theo kết quả mà thao tác trên CSDL rồi chuyển hướng hoặc trả về JSON
//TODO : Sử dụng này
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	if (!empty($_GET['action'])) {

		$test = new ProductModel();
		//Đọc nhiều sản phẩm
		if ($_GET['action'] === 'readAll') {
			try {

				$json = json_encode($test->read($_GET['id']));
				header('Content-Type: application/json');
				echo $json;
			} catch (Exception $e) {
				echo '<script>alert("Lỗi truy xuất dữ liệu.");</script>';

				echo '<script>window.location.href = "http://ct275.localhost/admincreate.php";</script>';
			}
		}
		if ($_GET['action'] === 'readPage') {
			try {
				$json = json_encode($test->readPage($_GET['page']));
				header('Content-Type: application/json');
				echo $json;
			} catch (Exception $e) {
				echo '<script>alert("Lỗi truy xuất dữ liệu.");</script>';

				echo '<script>window.location.href = "http://ct275.localhost/admincreate.php";</script>';
			}
		}
		if ($_GET['action'] === 'read') {
			try {

				$json = json_encode($test->read($_GET['id']));
				header('Content-Type: application/json');
				echo $json;
			} catch (Exception $e) {

				echo '<script>alert("Lỗi truy xuất dữ liệu.");</script>';
				echo '<script>window.location.href = "http://ct275.localhost/admincreate.php";</script>';
			}
		}
	}

	if ($_GET['action'] === 'delete') {
		// Không phải admin làm = do nothing
		// if (!isset($_SESSION['user']) || $_SESSION['username'] !== 'admin') {
		// 	$data = array(
		// 		'error' => 'Không phải Admin'
		// 	);
		// 	$jsonString = json_encode($data);

		// 	header('Content-Type: application/json');
		// 	header('Content-Length: ' . strlen($jsonString));

		// 	echo $jsonString;
		// 	exit;
		// }
		$test = new ProductModel();
		try {
			$test->delete($_GET['id']);
		} catch (Exception $e) {
			echo '<script>alert("Lỗi truy xuất dữ liệu.");</script>';
			echo '<script>window.location.href = "http://ct275.localhost/admincreate.php";</script>';
		}
	}
}
