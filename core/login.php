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
			width: 340px;

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
			-moz-transition-property: color;
			-moz-transition-duration: 0.7s;
			-moz-transition-timing-function: ease;
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
			width: 333.4px;

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
			margin-top: 30px;
			text-align: center;
			padding-top: 15px;
			padding-bottom: 3px;
			color: #999;
			font: bold 14px Arial,Helvetica;
			text-decoration: none;
			text-shadow: 0px 1px 0px #000;


		}
		.button
		{
			display: block;
			text-decoration: none;
			color: #555;
			font-size: 12px;
			font-weight: bold;
			text-align: center;
			line-height: 20px;
			padding: 12px;
			margin: 0px;
			background: none repeat scroll 0% 0% #FBECE7;
			width: 100px;
			border-radius: 10px;
			box-shadow: 3px 3px 0px #888;
			border-bottom: 1px solid #555;
		}
		.button:hover
		{
			-moz-transition-property: background,color;
			-moz-transition-duration: 0.7s;
			-moz-transition-timing-function: ease;

			background-color: #555;
			color:white;
			cursor:hand;
			cursor:pointer;
		}
		td{
			font-family: Verdana;
		font-size:14px;
		
		font-weight: 400px;
		line-height: 20px;
		
		text-indent: 20px;
		
		letter-spacing: .1em;
		}
		</style>
	</head>
	<body bgcolor="#ffebcd">
    

		<div class="banner"><a href="home_page.php" class="banner2">CITY WITHOUT CRIME</a></div>
		<div class="gandhi"><a href="home_page.php">home</a></div>
		<div class="gandhi1"><a href="about_us.php">about us</a></div>
		<div class="gandhi1"><a href="fir.php">lodge fir</a></div>
		<div class="gandhi1"><a href="login.php">admin login</a></div>
		<br><br><br><br><br><br><br>
		<fieldset style="width:60%;margin-left:auto;margin-right:auto;border-radius:20px;border-width:5px;">
			<legend style="font-family:Verdana;font-size:16px;font-weight:600;text-shadow:1px 1px 1px;">LOGIN</legend>
			<table>
				<form method="post">
					<tr><td>ENTER USER ID</td><td><input name="txt_name" type="text" placeholder="enter ur user id"></td></tr>
					<tr><td>ENTER PASSWORD</td><td><input name="txt_pwd" type="password" placeholder="enter password"></td></tr>
					<tr><td></td><td></td></tr>
					<tr><td></td><td></td></tr>
					<tr><td></td><td></td></tr>
					<tr><td></td><td></td></tr>
					<tr align="center"><td colspan=2 ><input type="submit" name="btn_login" value="LOGIN!" style="border-width:0px;" class="button"></td></tr>
				</form>
			</table>
		</fieldset>

<font color="red" size="2">
<?php
    if(isset($_POST['btn_login']))
    {
        $link=mysql_connect("localhost","root","");
        mysql_select_db("project");
        $q="select * from admin where UID='".$_POST['txt_name']."' and PASSWORD='".$_POST['txt_pwd']."'";
    
        $rec=mysql_query($q);
        $r=mysql_fetch_row($rec);
        if($r[0]=="")
        {
            echo '<script>alert("ERROR!!RE-ENTER USER ID AND PASSWORD");</script>';
        }
        else
        {
        	session_start();
        	$_SESSION['user_id']=$_POST['txt_name'];
            header("location:admin_home_page.php");  

        }
    }
?></font>
		<footer width=100% style="margin-top:100px;">
			&copy;PAUL&CO
		</footer>
        
	</body>