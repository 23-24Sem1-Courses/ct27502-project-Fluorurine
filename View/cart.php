<?php
//  if (!empty($_SESSION['cart'])) print_r($_SESSION["cart"]);
?>
<div class="h-screen bg-gray-100 pt-20">
	<h1 class="mb-10 text-center text-2xl font-bold">Sản phẩm trong giỏ hàng</h1>
	<div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
		<div class="rounded-lg md:w-2/3" id="content">
			<div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start" id="cart_item1">
				<p class="text-gray-700">Không có sản phẩm nào trong giỏ hàng</p>
			</div>
			<!-- Add the address into a form and submit it-->

		</div>

		<!-- Sub total -->
		<div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
			<div class="mb-2 flex justify-between">
				<p class="text-gray-700">Tổng số lượng sản phẩm</p>
				<p class="text-gray-700" id="totalCount">0</p>
			</div>

			<hr class="my-4" />
			<div class="flex justify-between">
				<p class="text-lg font-bold">Tổng tiền</p>
				<div class="">
					<p class="mb-1 text-lg font-bold" id="totalSum">0</p>
					<p class="text-sm text-gray-700">bao gồm VAT</p>
				</div>
			</div>

			<button class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600" onclick="handlecheckout()">Thanh toán</button>
		</div>

	</div>
	<div class="w-1/2 mx-auto">
		<form method="POST" id="checkout" action="http://ct275.localhost/Controller/receiptController.php">
			<input type="hidden" name="action" value="checkout">
			<label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Nhập địa chỉ để nhận hàng</label>
			<input required type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Nhập địa chỉ để giao hàng" required>
		</form>
	</div>
	<script>
		const cartsum = () => {
			let sum = 0;
			let count = 0;
			let currentindex = 0;
			let pricearray = [];
			$('.productprice').each(function() {
				pricearray.push($(this).attr('value'));
			});
			$('.valueClass').each(function() {
				count += parseInt($(this).val());
				sum += parseInt($(this).val()) * parseInt(pricearray[currentindex]);
				currentindex++;
			});

			$('#totalCount').text("" + count);
			$('#totalSum').text(new Intl.NumberFormat('en-US', {
				style: 'currency',
				currency: 'VND'
			}).format(parseFloat(sum)));
		}

		function buttonClickAdd() {
			let clickindex = $(event.target).val();
			$.ajax({
				url: 'http://ct275.localhost/Controller/receiptController.php?action=addproduct&id=' + clickindex,

				type: 'GET',
				success: function(response) {
					let currentelement = $('#cart' + clickindex);
					currentelement.val(parseInt(currentelement.val()) + 1);
					console.log("Thêm thành công");
					cartsum()
				},
				error: function(xhr, status, error) {
					// Handle errors
					console.log("Error: " + error);
				}
			})
		}


		function buttonClickSub() {
			let clickindex = $(event.target).val();

			$.ajax({
				url: 'http://ct275.localhost/Controller/receiptController.php?action=subproduct&id=' + clickindex,
				type: 'GET',
				success: function(response) {

					console.log("Trừ thành công");
					let currentelement = $('#cart' + clickindex);
					if (parseInt(currentelement.val()) > 1) {
						currentelement.val(parseInt(currentelement.val()) - 1);
					}
					cartsum()
				},
				error: function(xhr, status, error) {
					// Handle errors
					console.log("Error: " + error);
				}
			})
		}
		const handlecheckout = () => {
			//submit the form
			$('#checkout').submit();
		}

		function deleteItem(id) {
			console.log(id);
			$.ajax({
				url: 'http://ct275.localhost/Controller/receiptController.php?action=deleteproduct&id=' + id,
				type: 'GET',
				success: function(response) {
					console.log("Xoá thành công");
					$('#cart_item' + id).remove();
					cartsum()
				},
				error: function(xhr, status, error) {
					// Handle errors
					console.log("Error: " + error);
				}
			})
		}
		// Return the sum of all the items in cart

		//
		const refreshPage = () => {
			$.ajax({
				url: 'http://ct275.localhost/Controller/receiptController.php?action=getcart',
				type: 'GET',
				success: function(response) {
					console.log(response);

					// Iterate over the JSON response and append table rows
					if (response.length != 0) {
						$('#content').empty();
					}
					$.each(response, function(index, product) {
						let row = `
						<div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start" id="cart_item${product.id}">
				<img src="${product.file_path}" alt="product-image" class="w-full rounded-lg sm:w-40" />
				<div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
					<div class="mt-5 sm:mt-0">
						<h2 class="text-lg font-bold text-gray-900">${product.name}</h2>
						<p class="mt-1 text-xs text-gray-700 productprice" value ="${product.price}">${product.category}</p>
					</div>
					<div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
						<div class="flex items-center border-gray-100">
							<button class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50 " value="${product.id}" onclick="buttonClickSub()"> - </button>
							<input class="valueClass h-8 w-8 border bg-white text-center text-xs outline-none" type="text" value="${product.quantity}" min="1" id="cart${product.id}" />
							<button class="cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50" value=${product.id} onclick="buttonClickAdd()"> + </button>
						</div>
						<div class="flex items-center space-x-4">
							<p class="text-sm">${new Intl.NumberFormat('en-US', { style: 'currency', currency: 'VND' }).format(parseFloat(product.price))}	</p>
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-red-500" onclick="deleteItem(${product.id})">
								<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>
						</div>
					</div>
				</div>
			</div>`

						$('#content').append(row);
					});
					cartsum();
				},
				error: function(xhr, status, error) {
					// Handle errors
					console.log("Error: " + error);
				}
			})
		}
		refreshPage();
	</script>