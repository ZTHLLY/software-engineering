<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="志愿者页面.css">
	<head>
		<meta charset="utf-8">
		<title>志愿者页面</title>
	</head>
	<body>
		
		
		<div class="Main">
		
		<div class="head">
			<div class="title">
				<img src="../image/志愿者标题.png">
			</div>
			<div class="logo">
					<img src="../image/logo.png">
			</div>
			<div class="line"></div>
		</div>
		
		<form action="db.php" method="post" onsubmit="return enter()">
		<div class="body">
			<div class="left">
				<div class="informationtitle">
					<img src="../image/志愿者书.png">
				</div>
				
				<div class="name">
					<img src="../image/name.png" width="80px">
					<input type="text" id="name" name="name" oninput="check_name()" placeholder="please type your name" required>
					<label id="name_trip"></label>
				</div>
				<div class="phone">
					<img src="../image/phone.png" width="80px">
					<input type="text" id="phone_number" name="phone" oninput="check_phone_number()" placeholder="please type your phone number" required>
					<label id="phone_number_trip"></label>
				</div>
				<div class="address">
					<img src="../image/address.png" width="80px">
					<input type="text" id="address" name="address" oninput="check_address()" placeholder="please type your address" required>
					<label id="address_trip"></label>
				</div>
				<div class="email">
					<img src="../image/email.png" width="80px">
					<input type="email" id="email" name="email" oninput="check_email()" placeholder="please type your email" required>
					<label id="email_trip"></label>
				</div>
				<div class="identity">
					<img src="../image/identity.png" width="80px">
					<input type="text" id="identity" name="identity" oninput="check_identity()" placeholder="please type your identity" required>
					<label id="identity_trip"></label>
				</div>
				

				
			</div>
			<div class="right">
				<img src="../image/volunteer.png" >
				<p style="text-align: center;" class="submit">
				    <input type="submit" class="button" onclick="Submit()" value="submit">
				    <input type="reset" class="button" onclick="Reset()" value="reset">
				</p>
			</div>
			
		
		</div>
		</form>
		
		</div>
		
		
	</body>
	<script src="志愿者页面.js"></script>
</html>