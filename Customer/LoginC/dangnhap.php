<?php
session_start();
// session_destroy();
if(isset($_SESSION['check']))
header("location:../home.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<style type="text/css">
		table{
			background-color: lightgrey;			
		}

/*******************
BODY STYLING
*******************/

		* {
			margin: 0;
			padding: 0;
			border: none;
			outline: none;
		}

		body {
			background: url('https://thumbs.gfycat.com/FastBeautifulBunting-size_restricted.gif') no-repeat center center fixed;
					  -webkit-background-size: cover;
					  -moz-background-size: cover;
					  -o-background-size: cover;
					  background-size: cover;
			 font-family: Courier New;
			font-weight:300;
			text-align: left;
			text-decoration: none;
			height: 500px;
		}

		#wrapper {
			/* Center wrapper perfectly */
			width: 300px;
			height: 400px;
			margin: 70px auto;
		}




		/*******************
		LOGIN FORM
		*******************/

		.login-form {
			width: 300px;
			margin: 0 auto;
			position: relative;
			
			background: #f3f3f3;
			border: 1px solid #fff;
			border-radius: 5px;
			
			box-shadow: 0 1px 3px rgba(0,0,0,0.5);
			-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
			-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
		}

		/*******************
		HEADER
		*******************/

		.login-form .header {
			padding: 40px 30px 30px 30px;
		}

		.login-form .header h1 {
			font-family: 'Bree Serif', serif;
			font-weight: 300;
			font-size: 28px;
			line-height:34px;
			color: #414848;
			text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
			margin-bottom: 10px;
		}

		.login-form .header span {
			font-size: 11px;
			line-height: 16px;
			color: #678889;
			text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
		}

		/*******************
		CONTENT
		*******************/

		.login-form .content {
			padding: 0 30px 25px 30px;
		}

		/* Input field */
		.login-form .content .input {
			width: 188px;
			padding: 15px 25px;
			
			font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
			font-weight: 400;
			font-size: 14px;
			color: #9d9e9e;
			text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
			
			background: #fff;
			border: 1px solid #fff;
			border-radius: 5px;
			
			box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
			-moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
			-webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
		}

		/* Second input field */
		.login-form .content .password, .login-form .content .pass-icon {
			margin-top: 25px;
		}

		.login-form .content .input:hover {
			background: #dfe9ec;
			color: #414848;
		}

		.login-form .content .input:focus {
			background: #dfe9ec;
			color: #414848;
			
			box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
			-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
			-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
		}

		.user-icon, .pass-icon {
			width: 46px;
			height: 47px;
			display: block;
			position: absolute;
			left: 0px;
			padding-right: 2px;
			z-index: -1;
			
			-moz-border-radius-topleft: 5px;
			-moz-border-radius-bottomleft: 5px;
			-webkit-border-top-left-radius: 5px;
			-webkit-border-bottom-left-radius: 5px;
		}

		.user-icon {
			top:170px; /* Positioning fix for slide-in, got lazy to think up of simpler method. */
			background:grey url(http://www.demo.amitjakhu.com/login-form/images/user-icon.png) no-repeat center;	
		}

		.pass-icon {
			top:220px;
			background:grey url(http://www.demo.amitjakhu.com/login-form/images/pass-icon.png) no-repeat center;
		}

		.content input:focus + div{
			left: -46px;
		}

		/* Animation */
		.input, .user-icon, .pass-icon, .button, .register {
			transition: all 0.5s ease;
			-moz-transition: all 0.5s ease;
			-webkit-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
			-ms-transition: all 0.5s ease;
		}

		/*******************
		FOOTER
		*******************/

		.login-form .footer {
			padding: 25px 30px 40px 30px;
			overflow: auto;
			
			background: #d4dedf;
			border-top: 1px solid #fff;
			
			box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
			-moz-box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
			-webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
		}

		/* Login button */
		.login-form .footer .button {
			float:right;
			padding: 11px 25px;
			
			font-family: 'Bree Serif', serif;
			font-weight: 300;
			font-size: 18px;
			color: #fff;
			text-shadow: 0px 1px 0 rgba(0,0,0,0.25);
			
			background: #56c2e1;
			border: 1px solid #46b3d3;
			border-radius: 5px;
			cursor: pointer;
			
			box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
			-moz-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
			-webkit-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
		}

		.login-form .footer .button:hover {
			background: #3f9db8;
			border: 1px solid rgba(256,256,256,0.75);
			
			box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
			-moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
			-webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
		}

		.login-form .footer .button:focus {
			position: relative;
			bottom: -1px;
			
			background: #56c2e1;
			
			box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
			-moz-box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
			-webkit-box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
		}

	
				

	</style>
</head>
<body>

<div id="wrapper">
	<form name="login-form" class="login-form" action="xulydn.php" method="post">
	
		<div class="header">
		<h1>Sign In</h1>
		<span>To get the most out of Converse.com.au, enter your account email address and password below.</span>
		</div>
	
		<div class="content">
			<input name="email" type="Email" class="input email" placeholder="Email" required >
			<div class="user-icon"></div>
			<input name="pass" type="password" class="input password" placeholder="Password" required >
			<div class="pass-icon"></div>		
		</div>

		<div class="footer">
		<input type="submit" name="btnDangnhap" value="Login" class="button" >
		<p>Don’t have an account yet? <a href="dangki.php">Sign Up</a></p>
		</div>
	
	</form>

</div>



</body>
</html>

