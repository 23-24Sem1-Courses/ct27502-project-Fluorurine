<?php

use Model\ReceiptModel;

$receipt_model = new ReceiptModel();
$receiptarray = $receipt_model->readAll();
// If no username and password are in session or POST data, do nothing
?>
<div class=" bg-gray-200 py-20 p-4 md:p-20 lg:p-32 overflow-hidden">
	<div class=" bg-white rounded-lg overflow-hidden shadow-lg mx-auto">


		<section class=" w-full">
			<div id="main" class="main-content flex-1 bg-white  mt-4 ">


				<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
					<table class="w-full text-sm text-left text-gray-500">
						<thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
							<tr>
								<th scope="col" class="px-6 py-3 w-2">
									STT
								</th>
								<th scope="col" class="px-6 py-3">
									Địa chỉ
								</th>
								<th scope="col" class="px-6 py-3">
									Khách hàng
								</th>

								<th scope="col" class=" px-6 py-3">
									Hành động
								</th>
							</tr>
						</thead>
						<tbody id="content">
							<?php foreach ($receiptarray as  $receipt) : ?>
								<tr class="hover:bg-gray-100">
									<td class="px-6 py-4 border w-2 "><?= $receipt["id"] ?></td>
									<td class="px-6 py-4 w-96 border font-medium text-gray-900 "><?= $receipt["address"] ?> </td>
									<td class="px-6 py-4 border"><?= $receipt["userid"] ?></td>

									<td class="px-6 py-4 border">
										<div class="flex w-32 font-bold justify-between">
											<a href="http://ct275.localhost/receiptdetail.php?id=<?= $receipt["id"] ?>" class="font-medium text-blue-600 hover:underline">Chỉnh sửa</a>

										</div>
									</td>
								</tr>
							<?php endforeach; ?>

						</tbody>
					</table>
					<div id="tableplaceholder	" class="text-center text-gray-500 mt-4 mb-4"> Không có sản phẩm để hiển thị</div>
				</div>



			</div>
		</section>
	</div>
</div>
</div>
<script>
	// 	$.ajax({
	// 		url: 'http://ct275.localhost/Controller/productController.php?action=readPage&page=' + num,
	// 		type: 'GET',
	// 		success: function(response) {
	// 			$('#content').empty();
	// 			console.log(response);
	// 			$.each(response, function(index, product) {
	// 				console.log(product);

	// 				let row = `
	// 						<tr class="hover:bg-gray-100">
	// 								<td class="px-6 py-4 border w-2 ">${product.id}</td>
	// 								<td class="px-6 py-4 w-96 border font-medium text-gray-900 ">${product.name} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est explicabo, velit iusto vitae tempora, nobis sapiente ullam optio, perferendis illum molestias ipsam odio eligendi corporis veritatis eum ipsa iste error?
	// 								</td>
	// 								<td class="px-6 py-4 border"><img src="${product.file_path}" alt="${product.name}"></td>

	// 								<td class="px-6 py-4 border">
	// 									<div class="flex w-32 font-bold justify-between">

	// 										<a href="http://ct275.localhost/adminupdate.php?id=${product.id}" class="font-medium text-blue-600 hover:underline">Chỉnh sửa</a>
	// 										<a class="font-bold hover:underline text-red-600 hover:underline" onclick="deleteItem('${product.id}')">Xoá</a>
	// 									</div>
	// 								</td>
	// 							</tr>
	// `
	// 				$('#content').append(row);
	// 			});


	// 		},
	// 		error: function(xhr, status, error) {
	// 			console.log("Error: " + error);
	// 		}
	// 	});
</script>