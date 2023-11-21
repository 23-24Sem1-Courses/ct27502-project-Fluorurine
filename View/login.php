<?php
// Check if username and password are already in session
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
	// Redirect to a different page
	header("Location: /");
	exit;
}




// If no username and password are in session or POST data, do nothing
?>
<div class="h-screen bg-gray-200 py-20 p-4 md:p-20 lg:p-32">
	<div class="max-w-sm bg-white rounded-lg overflow-hidden shadow-lg mx-auto">
		<div class="p-6">
			<h2 class="text-2xl font-bold text-gray-800 mb-2">Chào mừng bạn đã trở lại</h2>
			<p class="text-gray-700 mb-6">Hãy đăng nhập vào tài khoản của bạn</p>
			<form id="loginForm" action="http://ct275.localhost/Controller/loginController.php" enctype="multipart/form-data " method="POST">
				<div class=" mb-4">
					<label class="block text-gray-700 font-bold mb-2" for="username">
						Tên đăng nhập
					</label>
					<input id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
				</div>
				<div class="mb-6">
					<label class="block text-gray-700 font-bold mb-2" for="password">
						Mật khẩu
					</label>
					<input name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password">
				</div>
				<div class="flex items-center justify-between">
					<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
						Đăng nhập
					</button>
					<a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
						Quên mật khẩu?
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
<script>

</script>