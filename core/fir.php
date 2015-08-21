
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
			width: 333px;

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
			font-size: 10px;
			font-weight: bold;
			text-align: center;
			line-height: 20px;
			padding: 12px;
			margin: 0px;
			background: none repeat scroll 0% 0% #FBECE7;
			width: 150px;
			border-radius: 10px;
			box-shadow: 3px 3px 0px #888;
			border-bottom: 1px solid #555;
		}
		.button:hover
		{
			background-color: #555;
			color:white;
			cursor:pointer;
			cursor:hand;
		}
		td{
			font-family: Verdana;
		font-size:11px;
		
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
			<legend style="font-family:Verdana;font-size:16px;font-weight:600;text-shadow:1px 1px 1px;">LODGE FIR</legend>
			<table>
			<form method="post" enctype="multipart/form-data">
				<tr ><td>ENTER NAME</td><td><input type="text" placeholder="enter your name" name='txt_name'></td>
				<tr><td>SELECT AGE</td><td><input type="number" min="1" max="200" placeholder="enter age" name='txt_age'></td>
				<tr><td>SELECT GENDER</td><td><input type="radio" name='radio_gen' value='male'> Male <input type="radio" name='radio_gen' value='female'> Female</td>
				<tr ><td align="top">ENTER ADDRESS</td><td align="top"><textarea placeholder="enter ur address" rows=2 name='txt_add' ></textarea></td>
				<tr><td>ENTER ID PROOF</td><td><input type="text" placeholder="give AADHAR id no." name='txt_id'></td></tr>
				<tr><td>ENTER MOBILE NO</td><td><input type="text" placeholder="enter your contact no." name='txt_contact'></td>
				<tr><td>GIVE DESCRIPTION OF CRIME</td><td><textarea placeholder="give description" rows=7 name='txt_desc'></textarea></td>
				<tr><td>UPLOAD PIC OF CRIME *</td><td><input type="file" name="myfile" >(click on the submit button to upload the pic)</td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td ><input type="submit" value="SUBMIT DATA" class="button" name='btn_submit' ></td><td><input type="reset" value="RESET" class="button"></td></tr>
			</form>
			</table>
			<br><br>
		<sub style="font: 15px Arial;">* marked fields are optional</sub>
		</fieldset>
		<br><br><br>
		<fieldset style="width:60%;margin-left:auto;margin-right:auto;border-radius:20px;border-width:5px;">
			<legend style="font-family:Verdana;font-size:16px;font-weight:600;text-shadow:1px 1px 1px;">CHECK STATUS</legend>
			<table>
			<form>
				<tr><td>ENTER CASE/FIR ID</td><td><input type="text" placeholder="enter case id" name="txt_case_id"></td></tr>
				<tr><td colspan=2 width=50px><input type="submit" value="CHECK STATUS" class="button" name="btn_status"></td></tr>
			</form>
			</table>
		</fieldset>

		<footer width=100% style="margin-top:100px;">
			&copy;PAUL&CO
		</footer>
		<?php
		
		
		if(isset($_POST['btn_submit'])&&$_POST['txt_name']&&$_POST['txt_age']&&$_POST['radio_gen']&&$_POST['txt_add']&&$_POST['txt_id']&&$_POST['txt_contact']&&$_POST['txt_desc'])
		{
			$link=mysql_connect("localhost","root","");
			mysql_select_db("project");
			$q="select max(s_no) from fir_details";
			$rec=mysql_query($q);
			if($r=mysql_fetch_row($rec))
			{
				if($r[0]=='')
				{
					$sn=1;
				}
				else
				{
					$sn=$r[0];
					$sn++;
				}
			}
			$fir_id=$sn.$_POST['txt_name'].$_POST['txt_id'];
			if($_FILES['myfile']['error']==0)
				{
					$temp=$_FILES['myfile']['tmp_name'];
					$path=$_SERVER['DOCUMENT_ROOT']."project/".$_FILES['myfile']['name'];
					if(move_uploaded_file($temp,$path))
					{
						//echo "file uploaded";
					}
					else
					{
						//echo "error";
					}
				}
			$q="insert into fir_details values(".$sn.",'".$_POST['txt_name']."',".$_POST['txt_age'].",'".$_POST['radio_gen']."','".$_POST['txt_add']."','".$_POST['txt_id']."','".$_POST['txt_contact']."','".$_POST['txt_desc']."','".$_FILES['myfile']['name']."','".$fir_id."','"."on"."')";
				$rec=mysql_query($q);
				if(mysql_affected_rows($link)>0)
				{
					echo '<script>alert("FIR REGISTERED!");</script>';
				}
				else
				{
					echo '<script>alert("ERROR!");</script>';
				}
			
		}
		elseif(isset($_POST['btn_submit']))
		{
			echo '<script>alert("FILL IN THE MANDATORY FIELDS!!");</script>';
		}

		if(isset($_GET['btn_status'])&&$_GET['txt_case_id'])
		{
			$link=mysql_connect("localhost","root","");
			mysql_select_db("project");
			$q="select status from fir_details where fir_id='".$_GET['txt_case_id']."'";
			$rec=mysql_query($q);
			$r=mysql_fetch_row($rec);
			echo "<script>";
			echo "var v;";
			echo 'v="'.$r[0].'";';
			echo 'alert("case status is "+v);';
			echo "</script>";
						
		}
		elseif(isset($_GET['btn_status']))
		{
			echo "<script>";
			echo 'alert("error!!!");';
			echo "</script>";

		}
		?>
		

	</body>

	
