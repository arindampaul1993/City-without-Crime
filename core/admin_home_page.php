<html>
<head>
		<title></title>
		<style>
		body,html
		{
			margin:0;
			padding:0;
		}
		.gandhi{
			float: left;
			padding: 8px 23px;
			color: #999;
			text-transform: uppercase;
			font: bold 12px Arial,Helvetica;
			text-decoration: none;
			text-shadow: 0px 1px 0px #000;
			margin-top: 0px;
			
			padding: 0px;
			border: 0px none;

			vertical-align: baseline;
			width: 449px;

			border: 1px solid #222;
			background-color: #111;
			background-image: linear-gradient(#444, #111);
			box-shadow: 0px 1px 1px #777, 0px 1px 0px #666 inset;
			height:20px;
			text-align: center;
			padding-top: 10px;
			padding-bottom: 3px;
		}
		.gandhi:hover
		{
			color:white;
		}
		a{
			color:#999;
			text-decoration: none;
		}
		a:hover
		{
			color:white;
		}
		.gandhi1{
			float: left;
			padding: 8px 23px;
			color: #999;
			text-transform: uppercase;
			font: bold 12px Arial,Helvetica;
			text-decoration: none;
			text-shadow: 0px 1px 0px #000;
			margin-top: 0px;
			margin-left:0px;
			padding: 0px;
			border: 0px none;

			vertical-align: baseline;
			width: 445px;

			border: 1px solid #222;
			background-color: #111;
			background-image: linear-gradient(#444, #111);
			box-shadow: 0px 1px 1px #777, 0px 1px 0px #666 inset;
			height:20px;
			text-align: center;
			padding-top: 10px;
			padding-bottom: 3px;
		}
		.gandhi1:hover
		{
			color:white;
		}
		.gandhi2{
			float: left;
			padding: 8px 23px;
			color: #999;
			text-transform: uppercase;
			font: bold 12px Arial,Helvetica;
			text-decoration: none;
			text-shadow: 0px 1px 0px #000;
			margin-top: 0px;
			margin-left:0px;
			padding: 0px;
			border: 0px none;

			vertical-align: baseline;
			width: 449px;

			border: 1px solid #222;
			background-color: #111;
			background-image: linear-gradient(#444, #111);
			box-shadow: 0px 1px 1px #777, 0px 1px 0px #666 inset;
			height:20px;
			text-align: center;
			padding-top: 10px;
			padding-bottom: 3px;
		}
		
		.banner
		{
			background-image: url("2.jpg");
			width:100%;
			height:225px;
			text-align: center;
			color:black;
			font-family:Verdana;
			font-size:50px;
			padding-top: 0px;
			margin-top: 0px;
			text-shadow:1px 1px 1px;
			
		}
		.banner:hover
		{
			color:red;
		}
		.banner2{
			color:black;
			text-decoration: none;
		}
		.banner2:hover
		{
			color:red;
		}
		footer
		{
			border: 1px solid #222;
			background-color: #111;
			background-image: linear-gradient(#444, #111);
			box-shadow: 0px 1px 1px #777, 0px 1px 0px #666 inset;
			color:white;
			height:40px;
			text-align: center;
			margin-top: 230px;
			text-align: center;
			padding-top: 15px;
			padding-bottom: 3px;
			color: #999;
			font: bold 14px Arial,Helvetica;
			text-decoration: none;
			text-shadow: 0px 1px 0px #000;


		}
		</style>
	</head>
	<body bgcolor="#ffebcd">

		<div class="banner"><a href="admin_home_page.php" class="banner2">CITY WITHOUT CRIME</a></div>
		<div class="gandhi"><a href="admin_home_page.php">home</a></div>
		
		<div class="gandhi1"><a href="get_fir_details.php">get fir details</a></div>
		
		<div class="gandhi2">logged in as <?php
																session_start();
																if($_SESSION['user_id']=='')
																{
																	header("location:error.php");
																}
																else
																{
																echo $_SESSION['user_id'];
																}?>(<a href="login.php">logout</a>)</div><br><br><br><br><br><br><br>
		<fieldset style="width:60%;margin-left:auto;margin-right:auto;border-radius:20px;border-width:5px;">
			<legend style="font-family:Verdana;font-size:16px;font-weight:600;text-shadow:1px 1px 1px;">WELCOME <?php
																
																if($_SESSION['user_id']=='')
																{
																	header("location:error.php");
																}
																else
																{
																echo $_SESSION['user_id'];
																}?></legend>
			Select any option to proceed

		</fieldset>

		<footer width=100%>
			&copy;PAUL&CO
		</footer>
	</body>

	</html>