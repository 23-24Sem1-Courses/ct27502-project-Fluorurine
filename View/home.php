<div class="grid grid-cols-12 gap-1 ">
	<div class="col-span-4  flex flex-col justify-center items-center">
		<img class=" mx-auto object-fill flex-1 h-1/2" src="./public/f-banner1.png " alt="">
		<div class="h-1"></div>
		<img class=" mx-auto object-fill flex-1 h-1/2" src="./public/f-banner2.png " alt="">
	</div>

	<!-- Div để chửa Carousel -->
	<div class="col-span-8 h-full   ">
		<div id="default-carousel" class=" relative w-full " data-carousel="static">

			<div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">

				<div class="hidden duration-700 ease-in-out" data-carousel-item>
					<span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl  ">Primer Slide</span>
					<img src="./public/banner1.png" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 h-full" alt="...">
				</div>

				<div class="hidden duration-700 ease-in-out" data-carousel-item>
					<img src="./public/banner1.png" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 h-full" alt="...">
				</div>

				<div class="hidden duration-700 ease-in-out" data-carousel-item>
					<img src="./public/banner1.png" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 h-full" alt="...">
				</div>
			</div>


			<div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
				<button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
				<button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
				<button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
			</div>

			<button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
				<span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
					<svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
					</svg>
					<span class="hidden">Banner 1</span>
				</span>
			</button>
			<button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
				<span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
					<svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
					</svg>
					<span class="hidden">Banner 2</span>
				</span>
			</button>
		</div>
	</div>
	<!--  -->
</div>
<!-- Đây là phần category section để người dùng chọn -->
<h2 class="text-2xl font-bold tracking-tight text-gray-900  sm:px-2  py-8 text-center mx-auto">Danh mục sản phẩm </h2>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 gap-6 w-full">
	<div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow flex flex-col justify-center items-center" style="min-height: 160px">
		<div class="w-16 h-16 bg-gray-100 rounded-lg"></div>

		<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
			Category 1
		</h2>
	</div>

	<div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow flex flex-col justify-center items-center" style="min-height: 160px">
		<div class="w-16 h-16 bg-gray-100 rounded-lg"></div>

		<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
			Category 2
		</h2>
	</div>

	<div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow flex flex-col justify-center items-center" style="min-height: 160px">
		<div class="w-16 h-16 bg-gray-100 rounded-lg"></div>

		<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
			Category 3
		</h2>
	</div>

	<div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow flex flex-col justify-center items-center" style="min-height: 160px">
		<div class="w-16 h-16 bg-gray-100 rounded-lg"></div>

		<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
			Category 4
		</h2>
	</div>

	<div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow flex flex-col justify-center items-center" style="min-height: 160px">
		<div class="w-16 h-16 bg-gray-100 rounded-lg"></div>

		<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
			Category 5
		</h2>
	</div>

	<div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow flex flex-col justify-center items-center" style="min-height: 160px">
		<div class="w-16 h-16 bg-gray-100 rounded-lg"></div>

		<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
			Category 6
		</h2>
	</div>
</div>
<!--  -->
<!-- Phần ngăn cách -->
<div class="mx-auto  items-center text-center text-grey-500 text center hover:rounded font-bold hover:underline w-1/6  mt-4 	cursor-pointer">
	Xem tất cả sản phẩm >>
</div>
<hr class="w-3/4 h-1 mx-auto mt-4 bg-gray-100 border-0 rounded ">

<!-- Mo dau phan san pham moi -->
<div class=" bg-white  ">
	<div class=" mx-auto max-w-2xl px-2 sm:px-2 py-8 lg:max-w-7xl lg:px-8 ">
		<h2 class=" text-2xl font-bold tracking-tight text-gray-900">Sản phẩm mới cập nhật</h2>

		<div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 ">
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

			<!-- More products... -->
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
								Basic Tee 8
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
<!--  -->

<!-- Mở đầu sản phẩm nổi bật -->
<div class="bg-white mt-4 ">
	<div class="mx-auto max-w-2xl px-2 sm:px-2  py-8 lg:max-w-7xl lg:px-8 ">
		<h2 class="text-2xl font-bold tracking-tight text-gray-900">Sản phẩm nổi bật</h2>

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
		</div>
	</div>
</div>
<!--  -->
<!-- Phần liên hệ với chúng tôi -->
<section class="bg-white ">
	<div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
		<div class="mr-auto place-self-center lg:col-span-7">
			<h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl ">Liên hệ với chúng tôi sớm nhất</h1>
			<p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl ">From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>
			<a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 ">
				Get started
				<svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
			</a>
			<a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 ">
				Speak to Sales
			</a>
		</div>
		<div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
			<img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
		</div>
	</div>
</section>