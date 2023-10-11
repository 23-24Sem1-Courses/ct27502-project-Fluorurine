<?php


use Model\ReceiptModel;

$receipt_model = new ReceiptModel();
try {
	$receipdata = $receipt_model->readById($_GET["id"]);
	// check the length of associate array if not exit php file
	if (count($receipdata) == 0) {
		header("Location: http://ct275.localhost/");
		exit;
	}


	$receiptitems = $receipt_model->readfromReceiptItem($_GET["id"]);
	if (count($receiptitem) == 0) {
		header("Location: http://ct275.localhost/");
		exit;
	}
	// TODO: Cái này sửa lại vì trong Controller Create Receipt đã sửa có price rồi.
	$pricesum = 0;
	// for each item in the receipt item get the item id and put the in the array called price array and then use that array to get the price of the item from product model
	$price = [];
	foreach ($receiptitems as $receiptitem) {
		$price[] = $receiptitem["id"];
	}
	$pricearray = $receipt_model->getPrice($price);
	var_dump($price);
	foreach ($pricearray as $key => $value) {
		$receiptitems[$value["id"]]["price"] = $value["price"];
		$pricesum += $value["price"] * $receiptitems[$value["id"]]["quantity"];
	}
} catch (Exception $e) {

	echo $e->getMessage();
}
?>
<div class="bg-white border rounded-lg shadow-lg px-6 py-8 max-w-md mx-auto mt-8 mb-8">
	<div class="font-bold underline text-blue-500 cursor-pointer">Trở lại</div>
	<h1 class="font-bold text-2xl my-4 text-center text-blue-600">Chi tiết hoá đơn</h1>
	<hr class="mb-2">
	<div class="flex justify-between mb-6">
		<h1 class="text-lg font-bold"></h1>
		<div class="text-gray-700">
			<div>Ngày: 01/05/2023</div>
			<div>Hoá đơn số #: <?= $receipdata[0]["id"] ?></div>
		</div>
	</div>
	<div class="mb-8">
		<h2 class="text-lg font-bold mb-4">Khách hàng:</h2>
		<div class="text-gray-700 mb-2"><?= $receipdata["name"] ?></div>
		<div class="text-gray-700 mb-2"> <?= $receipdata["address"] ?></div>
		<!-- <div class="text-gray-700">johndoe@example.com</div>	 -->
	</div>
	<table class="w-full mb-8">
		<thead>
			<tr>
				<th class="text-left font-bold text-gray-700">Miêu tả</th>
				<th class="text-right font-bold text-gray-700">Số lượng</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($receiptitems as  $receiptitem) : ?>
				<tr>
					<td class="text-left text-gray-700"><?= $receiptitem["name"] ?></td>
					<td class="text-right text-gray-700"><?= $receiptitem["price"] ?></td>
				</tr>
			<?php endforeach; ?>


		</tbody>
		<tfoot>
			<tr>
				<td class="text-left font-bold text-gray-700">Tổng cộng</td>
				<td class="text-right font-bold text-gray-700"><?= $pricesum  ?></td>
			</tr>
		</tfoot>
	</table>
	<div class="text-gray-700 mb-2">Cảm ơn bạn đã chọn chúng tôi!</div>
	<div class="text-gray-700 text-sm">Sản phẩm sẽ được giao sớm nhất trong từ 5-7 ngày.</div>
</div>