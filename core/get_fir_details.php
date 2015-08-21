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
			margin-top: 130px;
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
			<legend style="font-family:Verdana;font-size:16px;font-weight:600;text-shadow:1px 1px 1px;">SELECT FIR ID AND GET DETAILS</legend>
			<table>
				<form>
				<tr><td>SELECT FIR ID:</td><td><select name="ddl_fir_id">
													<option>select any one id</option>
													<?php
														$link=mysql_connect("localhost","root","");
														mysql_select_db("project");
														$q="select fir_id from fir_details";
														$rec=mysql_query($q);
														while($r=mysql_fetch_row($rec))
																	{
																		echo "<option>";
																		echo $r[0];
																		echo "</option>";
																	}
													?>
												</select></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr align="center"><td colspan=2 ><input type="submit" value="GET DETAILS!" style="border-width:0px;" class="button" name="btn_get_details"></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td><?php
								if(isset($_GET['ddl_fir_id']))
								{
									
									setcookie("id",$_GET['ddl_fir_id']);
								}
								if(isset($_GET['btn_get_details'])&&isset($_GET['ddl_fir_id']))
								{
									$link=mysql_connect("localhost","root","");
									mysql_select_db("project");
									$q="select report,status from fir_details where fir_id='".$_GET['ddl_fir_id']."'";
									$rec=mysql_query($q);
									$r=mysql_fetch_row($rec);
									echo "REPORT OF THE CRIME:     </td><td><textarea >".$r[0]."</textarea></td></tr>";
									echo "<tr><td>STATUS OF THE CASE:</td><td><textarea rows=1 cols=10>".$r[1]."</textarea></td></tr>";
									
								}
								elseif(isset($_GET['btn_get_details']))
								{
									echo '<script>alert("SELECT AN ID FIRST!!");</script>';
								}
						?>
								

				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>

			</form>
			
			</table>
		</fieldset>
		<br><br><br>
		<fieldset style="width:60%;margin-left:auto;margin-right:auto;border-radius:20px;border-width:5px;">
			<legend style="font-family:Verdana;font-size:16px;font-weight:600;text-shadow:1px 1px 1px;">UPDATE CASE STATUS</legend>
			<table>
				<form>
					<tr><td>ENTER NEW CASE STATUS:</td><td><input type="text" name="txt_new_status"></td></tr>
					<tr><td></td><td></td></tr>
					<tr><td></td><td></td></tr>
					<tr><td></td><td></td></tr>
					<tr align="center"><td colspan=2 ><input type="submit" value="UPDATE" style="border-width:0px;" class="button" name="btn_update"></td></tr>
				

				</form>
			</table>
		</fieldset>
		<?php
		if(isset($_GET['btn_update'])&&$_GET['txt_new_status'])
		{
			$link=mysql_connect("localhost","root","");
			mysql_select_db("project");
			$q="update fir_details set status='".$_GET['txt_new_status']."' where fir_id='".$_COOKIE["id"]."'";
			$rec=mysql_query($q);
			if(mysql_affected_rows($link)>0)
			{
				echo '<script>alert("UPDATION FINISHED");</script>';
			}
			else
			{
				echo '<script>alert("UNABLE TO UPDATE");</script>';
			}
		}
		elseif(isset($_GET['btn_update']))
		{
			echo '<script>alert("UNABLE TO UPDATE");</script>';
		}
		?>
		<footer width=100%>
			&copy;PAUL&CO
		</footer>
	</body>
	</html>