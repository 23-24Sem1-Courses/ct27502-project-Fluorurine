<?php

use Model\ProductModel;

$model = new ProductModel();
$productdata = $model->read($_GET["id"]);
// if (!empty($_SESSION['cart'])) print_r($_SESSION["cart"]);
// print_r($productdata);
if (count($productdata) == 0) {
	header('Location: http://ct275.localhost/');
	exit;
}

?>
<!-- component -->
<section class="text-gray-700 body-font overflow-hidden bg-white">
	<button id="return" type="button" onclick="goBack()" class="bg-gray-800 text-white rounded-l-md border-r border-gray-100 py-2 hover:bg-red-700 hover:text-white px-3 ml-4">
		<div class="flex flex-row align-middle">
			<svg class="w-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
			</svg>
			<p class="ml-2">Trở lại</p>
		</div>
	</button>
	<div class="container px-5 py-24 mx-auto">
		<div class="lg:w-4/5 mx-auto flex flex-wrap">
			<img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="<?= $productdata[0]["file_path"] ?>">
			<div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
				<h2 class="text-sm title-font text-gray-500 tracking-widest">Tên sản phẩm</h2>
				<h1 class="text-gray-900 text-3xl title-font font-medium mb-4"><?= $productdata[0]["name"] ?></h1>

				<pre class="w-full "><p class="leading-relaxed overflow-x-auto "><?= $productdata[0]["description"] ?></p></pre>
				<div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">

				</div>

				<div class="flex ">
					<span id="productprice" class="title-font font-medium text-2xl text-gray-900"></span>
					<button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
						<svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
							<path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
						</svg>
					</button>
				</div>
				<div class="flex justify-around  mt-12 ">
					<button id="addCart" class="  text-white bg-blue-500 border-0 py-2 px-6 ml-24 focus:outline-none hover:bg-blue-900 rounded">Thêm vào giỏ hàng</button>
					<button id="buyBtn" class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-700 rounded"><a href="http://ct275.localhost/cart.php">Mua ngay</a></button>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	let goBack = () => {
		window.history.back();
	}
	$("#productprice").text(new Intl.NumberFormat('en-US', {
		style: 'currency',
		currency: 'VND'
	}).format(parseFloat(<?= $productdata[0]["price"] ?>)));
	$("#addCart").click(function() {
		console.log("Click");
		console.log("http://ct275.localhost/Controller/receiptController.php?action=addcart&quantity=1&id=<?= $_GET["id"] ?>");
		$.ajax({
			url: "http://ct275.localhost/Controller/receiptController.php?action=addcart&quantity=1&id=<?= $_GET["id"] ?>",
			type: "GET",
			success: function(data) {
				console.log(data);
				alert("Thêm vào giỏ hàng thành công");
			},
			error: function(data) {
				console.log(data);
				alert("Thêm vào giỏ hàng thất bại");
			}

		});
		$(document).ready(function() {});
		$("#return").click(function() {
			window.history.back();
		});

	});
</script>