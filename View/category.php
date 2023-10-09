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
						<div class="py-1 hidden" role="none" id="sorttypechose">

							<a class="text-gray-500 block px-4 py-2 text-sm cursor-pointer hover:font-bold" role="menuitem" tabindex="-1" id="menu-item-1" onclick="setsorttype(1)">Từ mới tới cũ</a>
							<a class="text-gray-500 block px-4 py-2 text-sm cursor-pointer hover:font-bold" role="menuitem" tabindex="-1" id="menu-item-2" onclick="setsorttype(2)">Từ cũ tới mới</a>
							<a class="text-gray-500 block px-4 py-2 text-sm cursor-pointer hover:font-bold" role="menuitem" tabindex="-1" id="menu-item-3" onclick="setsorttype(3)">Giá: Cao đến thấp</a>
							<a class="text-gray-500 block px-4 py-2 text-sm cursor-pointer hover:font-bold" role="menuitem" tabindex="-1" id="menu-item-4" onclick="setsorttype(4)">Giá: Thấp đến cao</a>
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


			<div class="grid grid-cols-5 gap-x-8 gap-y-10 ">
				<form class=" block" method="GET" action="http://ct275.localhost/Controller/productController.php?action=rcategory" id="categoryform">
					<input type="hidden" name="sorttype" id="sorttype" value="1">
					<h3 class="font-bold text-xl">Danh mục</h3>



					<div class="border-b border-gray-200 py-6">

						<div class="pt-6" id="categories">
							<div class="space-y-4">
								<div class="flex items-center">
									<input id="CAT1" name="categories[]" value="CAT1" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
									<label for="CAT1" class="ml-3 text-sm text-gray-600">CAT1</label>
								</div>
								<div class="flex items-center">
									<input id="CAT2" name="categories[]" value="CAT2" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
									<label for="CAT2" class="ml-3 text-sm text-gray-600">CAT2</label>
								</div>
								<div class="flex items-center">
									<input id="CAT3" name="categories[]" value="CAT3" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
									<label for="CAT3" class="ml-3 text-sm text-gray-600">CAT3</label>
								</div>
								<div class="flex items-center">
									<input id="CAT4" name="categories[]" value="CAT4" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
									<label for="CAT4" class="ml-3 text-sm text-gray-600">CAT4</label>
								</div>
								<div class="flex items-center">
									<input id="CAT5" name="categories[]" value="CAT5" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
									<label for="CAT5" class="ml-3 text-sm text-gray-600">CAT5</label>
								</div>
								<div class="flex items-center">
									<input id="CAT5" name="categories[]" value="CAT6" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
									<label for="CAT5" class="ml-3 text-sm text-gray-600">CAT6</label>
								</div>
							</div>
						</div>
					</div>
					<button id="catsearch" class="font-bold underline inline-flex whitespace-nowrap pt-4" type="button">Tìm kiếm >></button>
				</form>

				<!-- Product grid -->
				<div class="col-span-4 border border-gray-200">

					<!-- Your content -->
					<div class="mt-6 grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 " id="productcontainer">

						<!--  -->
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
</div>
<script>
	function setsorttype(newindex) {
		const oldindex = document.getElementById("sorttype").value;
		$("#menu-item-" + oldindex).removeClass("font-medium text-gray-900").addClass("text-gray-500");
		$("#menu-item-" + newindex).removeClass("text-gray-500").addClass("font-medium text-gray-900");
		document.getElementById("sorttype").value = newindex;
		console.log(document.getElementById("sorttype").value);

	}
	setsorttype(1)
	//
	$("#menu-button").click(function() {
		$("#sorttypechose").toggleClass("hidden");
	});
	const params = new URLSearchParams(document.location.search);
	if (params) {
		switch (params.get("cat")) {
			case "all":
				for (let i = 1; i < 6; i++) {

					$("#CAT" + i).prop("checked", true);
				}
				break;

			default:
				$("#CAT" + params.get("cat")).prop("checked", true);
				break;

		}
	}
	categoryform = $('#categoryform');
	$("#catsearch").click(

		function() {
			refreshPage();
		}
	)
	const refreshPage = () => {
		const formData = $("#categoryform").serialize();
		console.log(formData);
		$.ajax({
			url: 'http://ct275.localhost/Controller/productController.php?action=category',
			data: formData,
			type: 'GET',
			success: function(response) {
				$('#content').empty();
				console.log(response);
				// Iterate over the JSON response and append table rows
				$('#productcontainer').empty();
				$.each(response, function(index, product) {
					console.log(product);

					let row = `
						<div class="group relative"><a href="http://ct275.localhost/productdetail?id=${product.id}">
							<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
								<img src="${product.file_path}" title="${product.name}"  class="h-full w-full object-cover object-center lg:h-full lg:w-full">
							</div>
							<div class="mt-4 flex justify-between">
								<div>
									<h3 class="text-sm text-gray-700">
										<a href="#">

											${product.name}
										</a>
									</h3>
									<p class="mt-1 text-sm text-gray-500">${product.category}</p>
								</div>
								<p class="text-sm font-medium text-gray-900">${new Intl.NumberFormat('en-US', { style: 'currency', currency: 'VND' }).format(parseFloat(product.price))}</p>
							</div>
					</a>	</div>`

					$('#productcontainer').append(row);
				});
			},
			error: function(xhr, status, error) {
				// Handle errors
				console.log("Error: " + error);
			}
		})
	}
	$("#catsearch").click();
</script>