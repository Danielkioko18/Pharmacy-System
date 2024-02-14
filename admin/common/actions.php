
<?php 
include('../account/functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../account/login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../account/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		* { margin: 0px; padding: 0px; }
		body {
			box-sizing: border-box;
			height: 100%;
			font-size: 100%;
			background: #F8F8FF;
			text-decoration: none;
			height: 100%;
		}
		.header {
			width: 40%;
			margin: 30px auto 0px;
			color: white;
			background: #5F9EA0;
			text-align: center;
			border: 1px solid #B0C4DE;
			border-bottom: none;
			border-radius: 10px 10px 0px 0px;
			padding: 20px;
		}
		.content{
			z-index: 10;
			position: fixed;
			box-sizing: border-box;
			float: left;
			background: #0099FF;
			border-right: 1px solid black;
			display: inline-block;
			width: 20%;
			min-height: 100%;
			font-family: calibri;

		}
		.profile_info{
			font-family: Baskerville Old Face;
			display: inline-block;
			border-bottom: 1px solid #33ACFF;
		}
		.profile_img img {
			display: inline-block; 
			width: 150px; 
			height: 150px; 
			margin-left: 30px;
			float: center;
			border: 1px solid black;
			border-radius: 50%;
		}
		.profile_info div {
			display: inline-block; 
			margin: 5px;
			float: left;

		}
		.profile_info div strong{
			display: inline-block; 
			margin-left: 10px;
			float: left;
			font-size: 23px;
			font-weight: bold;
		}
		.profile_info i{
			font-size: 23px;
		}
		#bus{
			margin-left: 30px;
		}
		#title{
			margin-left: 15px;
			font-family: clibri;
			color: white;
			font-weight: bold;
			font-size: 25px;
		}
		.profile_info div a{
			font-size: 22px;
			font-weight: bold;
			margin-left: 50px;
			font-style: italic;
		}
		#fa-fa-sign-out{
			margin-left: 5px;
		}
		.actions{
			overflow: scroll;
		}
		.actions ul{
			list-style: none;
			flex-direction: column;;
			text-decoration: none;
		}
		.actions ul li{
			justify-content: space-around;
			padding: 10px;
			border-bottom: 1px solid #33ACFF;
			width: auto;	
		}
		.actions ul li i{
			float: left;
		}
		.actions ul li a{
			font-family: sans-serif;
			text-decoration: none;
			font-size: 25px;
			color: white;
			margin-left: 10px;
			font-weight: bolder;
		}
		.actions ul li:hover{
			background-color: darkblue;
		}
		.actions ul li:hover a{
			color: white;
		}


	</style>
</head>
<body>
	<!--<div class="header">
		<h2>Admin - Home Page</h2>
	</div>-->
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<i class="fa fa-bus" id="bus" style="font-size: 30px;color:#CDEF25"></i><strong id="title"><u>OBSS</u></strong>
			<div class="profile_img">
				<img src="../gallery/avator2.jpg" >
			</div>			

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br><br>
						<a href="home.php?logout='1'" style="color: red;">Logout</a><i class="fa fa-sign-out" id="fa-fa-sign-out" style="font-size:23px;color:red;"></i>
                       &nbsp; 
					</small>

				<?php endif ?>
				</div>
			</div>
			<div class="actions">
				<ul>
					<li class="active" id="dash"><i class="fa fa-dashboard" style="font-size:30px;color:#CDEF25"></i><a href="../admin/home.php">Dashboard</a></li>

					<li id="buses">
						<a href="../admin/employees.php">Employees</a>
					</li>

					<li id="route">
						<a href="../admin/orders.php">Orders</a>
					</li>

					<li id="customer">
						<a href="../admin/supliers.php">Supliers</a>
					</li>

					<li id="booking">
						<a href="../admin/sales.php">Sales</a>
					</li>

					<li id="admin">
						<a href="../admin/stock.php">Stock</a>
					</li>

					<li id="users">
						<a href="../admin/products.php">Products</a>
					</li>
					<li id="users">
						<a href="../admin/expiry.php">Expiry</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
