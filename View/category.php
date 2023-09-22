<div class="bg-white">


	<main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
		<div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">
			<h1 class="text-4xl font-bold tracking-tight text-gray-900">Tất cả sản phẩm</h1>

			<div class="flex items-center">
				<div class="relative inline-block text-left">
					<div>
						<button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
							Lọc
							<svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
							</svg>
						</button>
					</div>


					<div class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
						<div class="py-1" role="none" id="sorttypechose">

							<a class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0" onclick="setsorttype(1)">Từ mới tới cũ</a>
							<a class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2" onclick="setsorttype(2)">Từ cũ tới mới</a>
							<a class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3" onclick="setsorttype(3)">Giá: Cao đến thấp</a>
							<a class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4" onclick="setsorttype(4)">Giá: Thấp đến cao</a>
						</div>
					</div>
				</div>

				<button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
					<svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z" clip-rule="evenodd" />
					</svg>
				</button>
				<button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
					<svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />
					</svg>
				</button>
			</div>
		</div>

		<section aria-labelledby="products-heading" class="pb-24 pt-6">
			<h2 id="products-heading" class="sr-only">Products</h2>

			<div class="grid grid-cols-5 gap-x-8 gap-y-10 ">
				<form class="hidden lg:block" method="GET" action="http://ct275.localhost/Controller/productController.php?action=rcategory" id="categoryform">
					<input type="hidden" name="sorttype" id="sorttype" value="1">
					<h3 class="font-bold text-xl">Danh mục</h3>



					<div class="border-b border-gray-200 py-6">

						<div class="pt-6" id="categories">
							<div class="space-y-4">
								<div class="flex items-center">
									<input id="filter-category-0" name="categories[]" value="CAT1" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
									<label for="filter-category-0" class="ml-3 text-sm text-gray-600">CAT1</label>
								</div>
								<div class="flex items-center">
									<input id="filter-category-1" name="categories[]" value="CAT2" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
									<label for="filter-category-1" class="ml-3 text-sm text-gray-600">CAT2</label>
								</div>
								<div class="flex items-center">
									<input id="filter-category-2" name="categories[]" value="CAT3" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
									<label for="filter-category-2" class="ml-3 text-sm text-gray-600">CAT3</label>
								</div>
								<div class="flex items-center">
									<input id="filter-category-3" name="categories[]" value="CAT4" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
									<label for="filter-category-3" class="ml-3 text-sm text-gray-600">CAT4</label>
								</div>
								<div class="flex items-center">
									<input id="filter-category-4" name="categories[]" value="CAT5" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
									<label for="filter-category-4" class="ml-3 text-sm text-gray-600">CAT5</label>
								</div>
							</div>
						</div>
					</div>
					<button class="font-bold underline" type="submit">Tìm kiếm >></button>
				</form>

				<!-- Product grid -->
				<div class="lg:col-span-4 border border-gray-200">

					<!-- Your content -->
					<div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
						<div class="group relative">
							<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
								<img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
							</div>
							<div class="mt-4 flex justify-between">
								<div>
									<h3 class="text-sm text-gray-700">
										<a href="#">
											<span aria-hidden="true" class="absolute inset-0"></span>
											Basic Tee
										</a>
									</h3>
									<p class="mt-1 text-sm text-gray-500">Black</p>
								</div>
								<p class="text-sm font-medium text-gray-900">$35</p>
							</div>
						</div>
						<!--  -->
						<div class="group relative">
							<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
								<img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
							</div>
							<div class="mt-4 flex justify-between">
								<div>
									<h3 class="text-sm text-gray-700">
										<a href="#">
											<span aria-hidden="true" class="absolute inset-0"></span>
											Basic Tee
										</a>
									</h3>
									<p class="mt-1 text-sm text-gray-500">Black</p>
								</div>
								<p class="text-sm font-medium text-gray-900">$35</p>
							</div>
						</div>
						<div class="group relative">
							<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
								<img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
							</div>
							<div class="mt-4 flex justify-between">
								<div>
									<h3 class="text-sm text-gray-700">
										<a href="#">
											<span aria-hidden="true" class="absolute inset-0"></span>
											Basic Tee
										</a>
									</h3>
									<p class="mt-1 text-sm text-gray-500">Black</p>
								</div>
								<p class="text-sm font-medium text-gray-900">$35</p>
							</div>
						</div>
						<div class="group relative">
							<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
								<img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
							</div>
							<div class="mt-4 flex justify-between">
								<div>
									<h3 class="text-sm text-gray-700">
										<a href="#">
											<span aria-hidden="true" class="absolute inset-0"></span>
											Basic Tee
										</a>
									</h3>
									<p class="mt-1 text-sm text-gray-500">Black</p>
								</div>
								<p class="text-sm font-medium text-gray-900">$35</p>
							</div>
						</div>
						<div class="group relative">
							<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
								<img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
							</div>
							<div class="mt-4 flex justify-between">
								<div>
									<h3 class="text-sm text-gray-700">
										<a href="#">
											<span aria-hidden="true" class="absolute inset-0"></span>
											Basic Tee
										</a>
									</h3>
									<p class="mt-1 text-sm text-gray-500">Black</p>
								</div>
								<p class="text-sm font-medium text-gray-900">$35</p>
							</div>
						</div>
						<div class="group relative">
							<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
								<img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
							</div>
							<div class="mt-4 flex justify-between">
								<div>
									<h3 class="text-sm text-gray-700">
										<a href="#">
											<span aria-hidden="true" class="absolute inset-0"></span>
											Basic Tee
										</a>
									</h3>
									<p class="mt-1 text-sm text-gray-500">Black</p>
								</div>
								<p class="text-sm font-medium text-gray-900">$35</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
</div>
<script>
	function setsorttype(type) {
		document.getElementById("sorttype").value = type;
		console.log(document.getElementById("sorttype").value);

	}
	$categoryform = $('#categoryform');
	$categoryform.submit(function(e) {
		e.preventDefault();
		var formData = $(this).serialize();

		$.ajax({
			url: 'http://ct275.localhost/Controller/productController.php?action=category',
			data: formData,
			type: 'GET',
			success: function(response) {
				console.log("Click");
				console.log(response);

			},
			error: function(xhr, status, error) {
				// Handle errors
				console.log("Error: " + error);
			}
		});
	})
	const refreshPage = (num) => {
		$.ajax({
			url: 'http://ct275.localhost/Controller/productController.php?action=category',
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
			}
		})
	}
</script>