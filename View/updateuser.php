<?php



// If no username and password are in session or POST data, do nothing
?>
<div class=" bg-gray-200 py-20 p-4 md:p-20 lg:p-32 overflow-hidden">
	<div class=" bg-white rounded-lg overflow-hidden shadow-lg mx-auto">
		<div class="p-6">
			<h2 class="text-2xl font-bold text-gray-800 mb-2">Chào mừng bạn đã trở lại</h2>
			<p class="text-gray-700 mb-6">Bạn muốn thay đổi thông tin người dùng ?</p>
			<input type="hidden" name="action" id="action" value="update">
			<input type="hidden" name="productid" id="idfield">
			<div class=" grid gap-6 mb-6 md:grid-cols-2">
				<div>
					<label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Họ</label>
					<input required type="text" id="lastname" name="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Nhập họ của người dùng" required>
				</div>
				<div>
					<label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Tên</label>
					<input required type="text" id="firstname" name="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Nhập tên người dùng" required>
				</div>
			</div>
			<div>
				<label for="username" class="block mb-2 text-sm font-medium text-gray-900 ">Tên đăng nhập</label>
				<input required type="text" id="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Nhập tên đăng nhập" required>
			</div>
			<div>
				<label for="useremail" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
				<input required type="text" id="useremail" name="useremail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Nhập Email đăng nhập" required>

			</div>
			<div>
				<label for="userpasswd" class="block mb-2 text-sm font-medium text-gray-900 ">Mật khẩu</label>
				<input required type="text" id="userpasswd" name="userpasswd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Nhập mật khẩu cần sửa" required>
			</div>
			<div>
				<label for="repasswd" class="block mb-2 text-sm font-medium text-gray-900 ">Nhập lại mật khẩu</label>
				<input required type="text" id="repasswd" name="repasswd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Nhập lại mật khẩu" required>
			</div>
			<img id="previewimage" alt="Preview Image" class="hidden w-64 h-64" src="" />
			<div>

			</div>
			<div>
				<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Gửi</button>
			</div>
		</div>
	</div>
	<script>
		// TODO: Thêm code php sau:
		// $(document).ready(function() {
		// 	$.ajax({
		// 		url: 'http://ct275.localhost/Controller/userController.php?action=read&id=' + (new URLSearchParams(window.location.search)).get('id'),
		// 		type: 'GET',
		// 		success: function(response) {
		// 			let result = response[0]
		// 			console.log(result);
		// 			$('#lastname').val(result.name);
		// 			$('#firstname').val(result.price);
		// 			$('#username').val(result.username);
		// 			$('#useremail').val(result.email);
		// 			$('#idfield').val(result.id);
		// 		},
		// 		error: function(xhr, status, error) {
		// 			// Handle errors
		// 			console.log("Error: " + error);
		// 		}
		// 	});
		// })

		// function preview() {
		// 	$("#previewimage").attr("src", URL.createObjectURL(event.target.files[0]));
		// 	$("#previewimage").show();
		// }
		// send data as form serialized data to server
		$("#updateform").submit(function(e) {
			e.preventDefault();
			$.ajax({
				url: 'http://ct275.localhost/Controller/userController.php',
				type: 'POST',
				data: $(this).serialize(),
				success: function(response) {
					// Handle success
					console.log(response);
					if (response == "success") {
						alert("Cập nhật thành công");
						window.location.href = "http://ct275.localhost/index.php";
					} else {
						alert("Cập nhật thất bại");
					}
				},
				error: function(xhr, status, error) {
					// Handle errors
					console.log("Error: " + error);
				}
			});
		});
	</script>