<!DOCTYPE html>
<html>
<head>
	<title>Instagram Profile Editing Page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}
		.container {
			width: 80%;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
			border-radius: 5px;
			margin-top: 50px;
		}
		.profile-picture {
			width: 150px;
			height: 150px;
			border-radius: 50%;
			object-fit: cover;
			margin-right: 20px;
			float: left;
		}
		.profile-info {
			margin-left: 170px;
		}
		.profile-name {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		.profile-username {
			font-size: 18px;
			color: #333;
			margin-bottom: 20px;
		}
		.form-group {
			margin-bottom: 20px;
		}
		.form-label {
			display: block;
			margin-bottom: 5px;
		}
		.form-input {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
		}
		.form-submit {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		.form-submit:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="profile-info">
			<div class="profile-name"><?php echo($_COOKIE['name'])?></div>
			<div class="profile-username">@<?php echo($_COOKIE['email'])?></div>
			<form>
				<div class="form-group">
					<label for="name" class="form-label">Nome</label>
					<input type="text" id="name" class="form-input" value="Nome">
				</div>
				<div class="form-group">
					<label for="username" class="form-label">UserName</label>
					<input type="text" id="username" class="form-input" value="@">
				</div>
				<div class="form-group">
					<label for="bio" class="form-label">Biografia</label>
					<input type="text" id="username" class="form-input" value="bio">
				</div>
				<button type="submit" class="form-submit">Salvar Alterações</button>
			</form>
		</div>
	</div>

	<script>
		document.querySelector('form').addEventListener('submit', function(event) {
			event.preventDefault();
			const name = document.querySelector('#name').value;
			const username = document.querySelector('#username').value;
			alert(`Name: ${name}\nUsername: ${username}`);
		});
	</script>
</body>
</html>