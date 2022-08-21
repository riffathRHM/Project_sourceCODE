<?php
		session_start();
		$username = $_SESSION['username'];

		$con = mysqli_connect('localhost','id19411331_root','NejM7Wwf5\lWZ_~B','id19411331_member');
        if(!$con)
			echo "Connection Failed <br>";
		$result = mysqli_query($con,"select * from member where username = '$username'");
		$row = mysqli_fetch_assoc($result);
?>
<html>
	<head>
		<title>Details</title>
		<style type="text/css">
			body {
				margin: 0;
				padding: 0;
				background:url(background.jfif) ;
				background-size: 100%;
				font-family: sans-serif;
			}

			.box {
				width: 320px;
				height: 470px;
				background: #000;
				color: #fff;
				top: 50%;
				left: 50%;
				position: absolute;
				transform: translate(-50%,-50%);
				box-sizing: border-box;
				padding: 70px 30px;
			}

			.profile {
				width: 100px;
				height: 100px;
				border-radius: 50%;
				position: absolute;
				top: -50px;
				left: calc(50% - 50px);
			}

			h1 {
				margin: 0;
				padding: 0 0 20px;
				text-align: center;
				font-size: 22px;
			}

		</style>
	</head>
	<body align = "center">
		<div class="box">
			<h1> Member Details </h1>
			<img src="profile1.png" class = "profile">
							<p> FirstName: <?php echo $row['firstname'];?></p>
							<p> LastName : <?php echo $row['lastname'];?></p>
							<p> Email ID :<?php echo $row['email'];?> </p>
							<p> Date of Birth :<?php echo $row['dob'];?> </p>
							<p> Gender : <?php echo $row['gender'];?></p>
							<p> Contact No : <?php echo $row['contactno'];?></p>
							<p> Address : <?php echo $row['address'];?></p>
							<p> Medical Condition : <?php echo $row['medicalCondition'];?></p>
							<p> Membership Type : <?php echo $row['membershipType'];?></p>
							
		</div>				
	</body>
</html>