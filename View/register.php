<?php
// Check if username and password are already in session
if (!empty($_SESSION['username']) && !empty($_SESSION['password'])) {
	// Redirect to a different page
	header("Location: /");
	exit;
} ?>
<div class="h-screen bg-gray-200 py-20 p-4 lg:p-32">
	<div class="max-w-md bg-white rounded-lg overflow-hidden shadow-lg mx-auto">
		<div class="p-6 ">
			<h2 class="text-2xl font-bold text-gray-800 mb-2">Chào mừng bạn đến với chúng tôi</h2>
			<p class="text-gray-700 mb-6">Điền các thông tin cơ bản để đăng ký</p>
			<form class=" mb-4 bg-white rounded" id="registerForm" action="Controller/registerController.php" method="post">
				<div class="mb-4 md:flex md:justify-between">
					<div class="mb-4 md:mr-2 md:mb-0">
						<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
							Nhâp tên
						</label>
						<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="firstName" id="firstName" type="text" placeholder="Tên" />
					</div>
					<div class="md:ml-2">
						<label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
							Nhập họ
						</label>
						<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="lastName" id="lastName" type="text" placeholder="Họ" />
					</div>
				</div>
				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="username">
						Tên đăng nhập
					</label>
					<input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="username" id="username" type="text" placeholder="Nhập tên đăng nhập" />
				</div>
				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="email">
						Nhập Email
					</label>
					<input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="email" id="email" type="text" placeholder="Nhập email của bạn" />
				</div>
				<div class="mb-4 md:flex md:justify-between">
					<div class="mb-4 md:mr-2 md:mb-0">
						<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
							Mật khẩu
						</label>
						<input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border  rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="Nhập mật khẩu ở đây" />

					</div>
					<div class="md:ml-2">
						<label class="block mb-2 text-sm font-bold text-gray-700" for="r_password">
							Nhập lại mật khẩu
						</label>
						<input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="r_password" id="r_password" type="password" placeholder="Nhập lại mật khẩu ở đây" />
					</div>
				</div>
				<div class="mb-6 text-center">
					<button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
						Đăng ký tài khoản
					</button>
				</div>
				<hr class="mb-6 border-t" />
				<div class="text-center">
					<a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="#">
						Quên mật khẩu?
					</a>
				</div>
				<div class="text-center">
					<a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="./index.html">
						Đã có tài khoản? Đăng nhập!
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	//To use later if have the chance to do it
	$(document).ready(function() {
		// Submit form on button click
		$('#registerForm').on('submit', function(event) {
			// Prevent form from submitting

			// Get form data
			let username = $('#username').val();
			let email = $('#email').val();
			let firstName = $('#firstName').val();
			let lastName = $('#lastName').val();
			let remember = {

				username: username,
				password: password,
				firstName: firstName,
				lastName: lastName,
				email: email
			};
			localStorage.setItem('registerremember', JSON.stringify(remember));
			$('#registerForm').unbind('submit').submit();
		})
	})
	if (localStorage.getItem('registerremember')) {
		let rememberData = JSON.parse(localStorage.getItem('registerremember'));
		$('#username').val(rememberData.username);
		$('#firstName').val(rememberData.firstName);
		$('#lastName').val(rememberData.lastName);
		$('#email').val(rememberData.email);
	}
</script>