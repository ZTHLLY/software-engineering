<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="注册页面.css">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	<div class="main_screen">
			
			<div class="topic">
				<div class="logo">
					<img src="../image/logo.png">
				</div>
				<div class="topic_text">
					<h1>Register</h1>
				</div>
			</div>
			
			
			
			<div class="header">
			
				<div class="title">
					<a href="../主页面/主页面.html"><div class="branch home"><p>Home</p></div></a>
			
				</div>
				<div class="user">
					<img src="../image/user_logo.png">
					
					<div class="pop">
					<a href="../个人信息页面/个人信息页面.html"><div class="information">个人信息</div></a>
					<a href="../注册页面/注册页面.html"><div class="information">注册</div></a>
					<a href="../登录页面/sign_in.html"><div class="information">目录</div></a>
					</div>
				</div>
				
				<div class="research">
					<form action=""><input type="text">
					<img src="../image/research.png" onclick=""/>
					</form>
					
				</div>
				
				
			</div>
			
			
			
			<div class="bottom_screen">
			
			<div class="dim"></div>
			<div class="user_image">
				
			</div>
			
			<div class="content">
			
			<form>
				<p>username:<br>
					<input id="userName" name="userName" type="text" oninput="check_username()"  placeholder="Please create a user name" autofocus required>
					<br>
					<label class="alert" id="name_trip">
						
					</label>
				</p>
			
				<p>user password:<br>
					<input id="password" type="password" oninput="check_password()" placeholder="Please type your Password" required>
					<br>
					<label class="alert" id="password_trip">
						
					</label>
				</p>
			
				<p>confirm password:<br>
					<input id="surePassword" type="password" oninput="check_password()" placeholder="Please type your Password again" required >
					<br>
					<label class="alert" id="surePassword_trip">
					</label>
				</p>

				<div style="text-align: center;" >
					<input type="button" class="button" onclick="Submit()" value="submit" >
					<input type="button" class="button" onclick="Reset()" value="reset" >
				</div>
				
			</form>
			
			</div>
			
			</div>
			
			
		</div>
		
	</body>
	<script src="注册页面.js""></script>
	
</html>