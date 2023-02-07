 
     <!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login </title>
		<link rel="stylesheet" href="bootstrap.min.css"/>   
    <script src="jquery.min.js"></script>
    <script  src="bootstrap.min.js"></script>
    <style>
    body
{
	margin: 0;
	padding: 0;
	background: url(bg.jpg) no-repeat;
	background-size: cover;
	font-family: sans-serif;
}
.loginBox
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 350px;
	height: 420px;
	padding: 80px 40px;
	box-sizing: border-box;
	background: rgba(0,0,0,.5);
}
.user
{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	overflow: hidden;
	position: absolute;
	top: calc(-100px/2);
	left: calc(50% - 50px);
}
h2
{
	margin: 0;
	padding: 0 0 20px;
	color:aquamarine;
	text-align: center;
}
.loginBox p
{
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: #fff;
}
.loginBox input
{
	width: 100%;
	margin-bottom: 20px;
}
.loginBox input[type="text"],
.loginBox input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}
::placeholder
{
	color: rgba(255,255,255,.5);
}
.loginBox input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	color:black;
	font-size: 16px;
	background: aquamarine;
	cursor: pointer;
	border-radius: 20px;
}
.loginBox input[type="submit"]:hover
{
	background: #efed40;
	color: #262626;
}
.loginBox a
{
	color: #fff;
	font-size: 14px;
	font-weight: bold;
	text-decoration: none;
}
      
</style>

	</head>
	<body>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Sign In</h2>
			<form action='proses.php' method="POST">
				<p>Email</p>
				<input type="text" name="username" placeholder="Entrez votre Email">
				<p>Password</p>
				<input type="password" name="password" placeholder="••••••••••••••••••••••••" required>
				<div class="bt ls">
            <input type="submit"  value="LOGIN"  name="login" class="btn btn-lg btn-info mov"/>
                    <br>
                    <br>
             </div>
                
				<a href="#"  >Forgot your password ?</a>
			</form>
		</div>
	</body>
</html>
