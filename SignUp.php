<!DOCTYPE HTML>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
	<div class="container">
		<div class="main">
				
				<h2>Sign Up</h2><hr/>

				<?php 
				echo form_open('CSignUp/SignUp', 'role="form"');
				?>
				<label>Username 	:</label>
					<input id="name" name="username" placeholder="Username" type="text">
						<br><br>
				<label>Password 	:</label>
					<input id="password" name="password" placeholder="Password" type="password">
						<br><br>
				<label>Status 		:</label>
					<input name="status" placeholder="Status" type="text">
						<br><br>
				<input type="submit" name="daftar" id="submit" value="Sign Up">
				<?php
				echo form_close();
				?>
		</div>
	</div>

</body>
</html>