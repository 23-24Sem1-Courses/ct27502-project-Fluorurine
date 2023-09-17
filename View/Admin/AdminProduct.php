<?php

use Model\ProductModel;

$test = new ProductModel();
?>
<div class="bg-gray-800 font-sans leading-normal tracking-normal">


	<div class="flex flex-col md:flex-row min-h-screen">
		<nav aria-label="alternative nav " class="">
			<div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
				<ul class="pb-2 space-y-2">
					<li>
						<form action="#" method="GET" class="lg:hidden">
							<label for="mobile-search" class="sr-only">Search</label>
							<div class="relative">
								<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
									<svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
									</svg>
								</div>
								<input type="text" name="email" id="mobile-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-200 dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search">
							</div>
						</form>
					</li>
					<li>
						<a href=" https://flowbite-admin-dashboard.vercel.app/" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
							<svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
								<path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
							</svg>
							<span class="ml-3" sidebar-toggle-item="">Thống kê</span>
						</a>
					</li>

					<li>
						<a href="https://flowbite-admin-dashboard.vercel.app/settings/" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 ">
							<svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
								<path clip-rule="evenodd" fill-rule="evenodd" d="M8.34 1.804A1 1 0 019.32 1h1.36a1 1 0 01.98.804l.295 1.473c.497.144.971.342 1.416.587l1.25-.834a1 1 0 011.262.125l.962.962a1 1 0 01.125 1.262l-.834 1.25c.245.445.443.919.587 1.416l1.473.294a1 1 0 01.804.98v1.361a1 1 0 01-.804.98l-1.473.295a6.95 6.95 0 01-.587 1.416l.834 1.25a1 1 0 01-.125 1.262l-.962.962a1 1 0 01-1.262.125l-1.25-.834a6.953 6.953 0 01-1.416.587l-.294 1.473a1 1 0 01-.98.804H9.32a1 1 0 01-.98-.804l-.295-1.473a6.957 6.957 0 01-1.416-.587l-1.25.834a1 1 0 01-1.262-.125l-.962-.962a1 1 0 01-.125-1.262l.834-1.25a6.957 6.957 0 01-.587-1.416l-1.473-.294A1 1 0 011 10.68V9.32a1 1 0 01.804-.98l1.473-.295c.144-.497.342-.971.587-1.416l-.834-1.25a1 1 0 01.125-1.262l.962-.962A1 1 0 015.38 3.03l1.25.834a6.957 6.957 0 011.416-.587l.294-1.473zM13 10a3 3 0 11-6 0 3 3 0 016 0z"></path>
							</svg>
							<span class="ml-3" sidebar-toggle-item="">Tài khoản</span>
						</a>

				</ul>
				<div class="pt-2 space-y-2">
					<a href="https://github.com/themesberg/flowbite-admin-dashboard" target="_blank" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
						<svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
							<path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
						</svg>
						<span class="ml-3" sidebar-toggle-item="">GitHub Repository</span>
					</a>
					<a href="https://flowbite.com/docs/getting-started/introduction/" target="_blank" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
						<svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
							<path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
						</svg>
						<span class="ml-3" sidebar-toggle-item="">Flowbite Docs</span>
					</a>
					<a href="https://flowbite.com/docs/components/alerts/" target="_blank" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
						<svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
						</svg>
						<span class="ml-3" sidebar-toggle-item="">Components</span>
					</a>
					<a href="https://github.com/themesberg/flowbite-admin-dashboard/issues" target="_blank" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
						<svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path>
						</svg>
						<span class="ml-3" sidebar-toggle-item="">Support</span>
					</a>
				</div>
			</div>
		</nav>
		<!-- Content chinh -->
		<section class=" w-full">
			<div id="main" class="main-content flex-1 bg-white  mt-4 ">

				<div class="bg-gray-800 ">
					<div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
						<h1 class="font-bold pl-2">Thống kê</h1>
					</div>
				</div>


				<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
					<table class="w-full text-sm text-left text-gray-500">
						<thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
							<tr>
								<th scope="col" class="px-6 py-3 w-2">
									STT
								</th>
								<th scope="col" class="px-6 py-3">
									Tên sản phẩm
								</th>
								<th scope="col" class="px-6 py-3">
									Hình miêu tả
								</th>
								<th scope="col" class="px-6 py-3">
									Thể loại
								</th>
								<th scope="col" class="px-6 py-3">
									Giá
								</th>
								<th scope="col" class=" px-6 py-3">
									Hành động
								</th>
							</tr>
						</thead>
						<tbody id="content"=>
							<!--  -->
							<tr class="bg-white border-b ">
								<td class="px-6 py-4  border w-2">1</td>
								<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
									Apple MacBook Pro 17"
								</th>
								<td class="px-6 py-4">
									Silver
								</td>
								<td class="px-6 py-4">
									Laptop
								</td>
								<td class="px-6 py-4">
									$2999
								</td>
								<td class="px-6 py-4">
									<div class="flex w-32 font-bold justify-between  "><a href="#" class="font-medium text-blue-600 hover:underline">Chỉnh sửa</a><a href="#" class="font-bold  hover:underline text-red-600 hover:underline">Xoá</a></div>
								</td>
							</tr>
							</tr>
						</tbody>
					</table>
				</div>

				<!-- Pagiantion -->
				<div class="flex flex-col items-center">
					<!-- Help text -->
					<span class="text-sm text-gray-700 " id="pagination">
						Showing <span class="font-semibold text-gray-900 ">1</span> to <span class="font-semibold text-gray-900 ">10</span> of <span class="font-semibold text-gray-900 ">100</span> Entries
					</span>
					<div class="inline-flex mt-2 xs:mt-0">
						<!-- Buttons -->
						<button class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 " id="previousbtn">
							<svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4" />
							</svg>
							Lùi
						</button>
						<button class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 border-0 border-l border-gray-700 rounded-r hover:bg-gray-900 " id="nextbtn">
							Tiếp
							<svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
							</svg>
						</button>
					</div>
				</div>

			</div>
		</section>
	</div>
</div>


<script>
	let currentpage = 1;
	let pagesize = 8;
	let count = JSON.parse('<?= $test->count() ?>')[0].count;
	let refreshPage = (num) => {
		// Phân tranhg here
		let row = `	Đang hiển thị <span class="font-semibold text-gray-900 ">${(num - 1) * pagesize + 1}</span> đến <span class="font-semibold text-gray-900 ">${(num - 1) * pagesize + pagesize}</span> của <span class="font-semibold text-gray-900 ">${count}</span> sản phẩm`
		$('#pagination').html(row);
		// End of phân trang

		$.ajax({
			url: 'http://ct275.localhost/Controller/productController.php?action=readPage&page=' + num,
			type: 'GET',
			success: function(response) {
				$('#content').empty();
				console.log(response);
				// Iterate over the JSON response and append table rows
				$.each(response, function(index, product) {
					console.log(product);

					let row = `
						<tr class="hover:bg-gray-100">
								<td class="px-6 py-4 border w-2 ">${product.id}</td>
								<td class="px-6 py-4 border font-medium text-gray-900 whitespace-nowrap">${product.name}</td>
								<td class="px-6 py-4 border"><img src="${product.file_path}" alt="${product.name}" class="w-20 h-20"></td>
								<td class="px-6 py-4 border">${product.category}</td>
								<td class="px-6 py-4 border">${product.price}</td>
								<td class="px-6 py-4 border">
										<div class="flex w-32 font-bold justify-between">
												<!-- TODO: Thêm trang để chỉnh sửa dữ liệu -->
												<a href="http://ct275.localhost/adminupdate.php?id=${product.id}" class="font-medium text-blue-600 hover:underline">Chỉnh sửa</a>
												<a class="font-bold hover:underline text-red-600 hover:underline" onclick="deleteItem('${product.id}')">Xoá</a>
										</div>
								</td>
						</tr>`
					$('#content').append(row);
				});


			},
			error: function(xhr, status, error) {
				// Handle errors
				console.log("Error: " + error);
			}
		});
	}

	$('#previousbtn').click(() => {
		handlePageClick(currentpage - 1)
	});
	$('#nextbtn').click(() => {
		handlePageClick(currentpage + 1)
	});

	let handlePageClick = (i) => {
		if (i > 0 && i <= Math.ceil(count / pagesize)) {
			console.log(i);
			currentpage = i;
			refreshPage(currentpage)
		}
	}
	// Sử lý sự kieenjclick vào nút phân trang
	let deleteItem = (id) => {

		$.ajax({
			url: 'http://ct275.localhost/Controller/productController.php?action=delete&id=' + id,
			type: 'GET',
			success: function(response) {
				refreshPage(currentpage)
			},
			error: function(xhr, status, error) {
				// Handle errors
				console.log("Error: " + error);
			}
		});
		refreshPage(currentpage)
	}
	$(document).ready(function() {
		refreshPage(currentpage)
	})
</script>