<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="stylesheet" href="./sign_in.css">
</head>
<body>
    <h1>sign</h1>
        <form  action="db.php" method="post" onsubmit="return enter()">
        <div class="header">
            <div class="login">
                <h2>SIGN &nbsp IN</h2>
            </div>
        </div>

        <div class="input_place wrapper">

            <div class="name">
                <h2>username:</h2>
            </div>

            <div class="in_name">
                <div class="change">
                    <input name="name" type="text">
                </div>
            </div>

            <div class="passward">
                <h2>password:</h2>
            </div>

            <div class="in_pass">
                <div class="change_pass">
                    <input  id="can_show" name="password"  type="password">
                    <!-- <p class="request">请输入6~16位密码</p> -->
                </div>
            </div>

            <div class="sign_in">
                <div class="change_sign_in">
                	<input  type="submit">
                    <a href="#">sign&nbspin</a>
                </div>

            </div>



        </div>

    </form>

        <div class="tail">
            <div class="back">
                <a href="#">BACK</a>
            </div>
        </div>


        <script src="./sign_in.js
</body>
</html>