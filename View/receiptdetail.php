<?php


use Model\ReceiptModel;
use Model\ProductModel;

$receipt_model = new ReceiptModel();
$product_model = new ProductModel();
try {
	if (empty($_GET["id"] || !is_numeric($_GET["id"]))) {
		echo "<script>alert('Không tìm thấy hoá đơn');window.location.href='http://ct275.localhost/receipt.php';</script>";
		exit;
	}
	if (empty($_SESSION['username'])) {
		echo "<script>alert('Bạn chưa đăng nhập.');window.location.href='http://ct275.localhost/login.php';</script>";
		exit;
	}
	if ($_SESSION["username"] == "admin") {
		$receipdata = $receipt_model->readAll();
	} else {
	}
	$receipdata = $receipt_model->readById($_GET["id"]);
	// check the length of associate array if not exit php file
	if (count($receipdata) == 0) {
		echo "<script>alert('Không tìm thấy hoá đơn');window.location.href='http://ct275.localhost/receipt.php';</script>";
		exit;
	}


	$receiptitems = $receipt_model->readfromReceiptItem($_GET["id"]);
	// cacluate the sum of the price
	$pricesum = 0;
	foreach ($receiptitems as $receiptitem) {
		$pricesum += $receiptitem["price"] * $receiptitem["quantity"];
	}

	// if (count($receiptitem) == 0) {
	// 	header("Location: http://ct275.localhost/");
	// 	exit;
	// }
	// TODO: Cái này sửa lại vì trong Controller Create Receipt đã sửa có price rồi.
	// for each item in the receipt item get the item id and put the in the array called price array and then use that array to get the price of the item from product model
	// $pricesum = 0;
	// $price = [];
	// foreach ($receiptitems as $receiptitem) {
	// 	$price[] = $receiptitem["id"];
	// }
	// $pricearray = $receipt_model->getPrice($price);
	// var_dump($price);
	// foreach ($pricearray as $key => $value) {
	// 	$receiptitems[$value["id"]]["price"] = $value["price"];
	// 	$pricesum += $value["price"] * $receiptitems[$value["id"]]["quantity"];
	// }
} catch (Exception $e) {

	echo $e->getMessage();
}
?>
<div class="bg-white border rounded-lg shadow-lg px-6 py-8 max-w-md mx-auto mt-8 mb-8">
	<div class="font-bold underline text-blue-500 cursor-pointer " id="back"><a href="javascript:history.back()">Trở lại</a></div>
	<h1 class="font-bold text-2xl my-4 text-center text-blue-600">Chi tiết hoá đơn</h1>
	<hr class="mb-2">
	<div class="flex justify-between mb-6">
		<h1 class="text-lg font-bold"></h1>
		<div class="text-gray-700">
			<div>Thời điểm: <?= $receipdata[0]["date"] ?></div>
			<div>Hoá đơn số #: <?= $receipdata[0]["id"] ?></div>
		</div>
	</div>
	<div class="mb-8">
		<h2 class="text-lg font-bold mb-4">Khách hàng:</h2>
		<div class="text-gray-700 mb-2"><?= $receipdata[0]["userid"] ?></div>
		<!-- <div class="text-gray-700 mb-2">0</div> -->
		<div class="text-gray-700 mb-2"> <?= $receipdata[0]["address"] ?></div>
		<!-- <div class="text-gray-700 mb-2"> Cần Thơ</div> -->
		<!-- <div class="text-gray-700">johndoe@example.com</div>	 -->
	</div>
	<table class="w-full mb-8">
		<thead>
			<tr>
				<th class="text-left font-bold text-gray-700">Miêu tả</th>
				<th class="text-right font-bold text-gray-700">Giá -- Số lượng</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($receiptitems as  $receiptitem) : ?>
				<tr>
					<td class="text-left text-gray-700"><?= $product_model->read($receiptitem["product_id"])[0]["name"] ?></td>
					<td class="text-right text-gray-700"><?= number_format($receiptitem["price"], 0, ',', ',') .  " -- " . $receiptitem["quantity"] ?></td>
				</tr>
			<?php endforeach; ?>

			<!-- <tr>
				<td class="text-left text-gray-700">Galaxy Z Ford</td>
				<td class="text-right text-gray-700">₫14,000,000</td>
			</tr>

			<tr>
				<td class="text-left text-gray-700">Khô gà Anvy Foods</td>
				<td class="text-right text-gray-700">₫110,000</td>
			</tr> -->
		</tbody>
		<tfoot>
			<tr>
				<td class="text-left font-bold text-gray-700">Tổng cộng</td>
				<!-- <td class="text-right font-bold text-gray-700"><?= $pricesum  ?></td> -->
				<td class="text-right font-bold text-gray-700"><?= number_format($pricesum, 0, ',', ',') ?> VNĐ</td>

			</tr>
		</tfoot>
	</table>
	<div class="text-gray-700 mb-2">Cảm ơn bạn đã chọn chúng tôi!</div>
	<div class="text-gray-700 text-sm">Sản phẩm sẽ được giao sớm nhất trong từ 5-7 ngày.</div>
</div>
<script></script>