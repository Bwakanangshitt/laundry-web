<?php
include 'controller/main.php';
//testing push and pull
?>

<div class="login_panel">
	<div id="login_wrapper">
		<h1 id="login_title">AFFORDAWASH</h1>
		<form method="POST" action="controller/login.php">
			<input class="login" type="text" name="username" placeholder="Enter Username" required="required"> <br>
			<input class="login" type="password" name="password" placeholder="Enter Password" required="required"> <br>
			<input class="login btnLogin" onclick="clickRed(this)" type="submit" value="LOGIN" id="btnLogin">
		</form>
	</div>
</div>

<style>
	body {
		background-image: url("Login.jpg");
	}

	.login_panel {
		display: flex;
		justify-content: center;
		align-items: center;
	}


	#login_wrapper {
		margin-top: 50px;
		text-align: center;
		background-color: rgba(0, 153, 255, .2);
		backdrop-filter: blur(6px);
		border: 2px solid #0000ff;
		border-radius: 20px;
		padding: 50px 30px;
		margin-bottom: 20%;
	}

	#login_title {
		font-family: Verdana, Geneva, Tahoma, sans-serif;
		font-size: 30px;
		margin-bottom: 50px;
		color: white;
		text-shadow: 3px 3px 10px #0033ff;
	}

	.login {
		font-family: 'Courier New', Courier, monospace;
		font-size: 13px;
		padding: 13px;
		width: 300px;
		border: 3px solid white;
		border-radius: 10px;
		background-color: transparent;
		margin: 10px;
		color: white;
	}

	.btnLogin {
		font-family: 'Arial black', sans-serif;
		border: 5px solid #0099ff;
		margin-bottom: 30px;
		margin-top: 50px;
		background-color: #0099ff;
		border: 2px solid #0000ff;
		width: 230px;
		padding: 10px;
	}

	::placeholder {
		color: white;
	}
</style>

<script>

</script>