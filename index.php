<?php
	session_start();
	if (isset($_SESSION['manager_online'])) {
		header('Location:../redirect');
	}else{
?>
<head>
	<title> Mall Manager </title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/customstyle.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="styles/charisma-app.css">
	<link rel="stylesheet" type="text/css" href="styles/animate.min.css">
	<link rel="stylesheet" type="text/css" href="styles/jquery.noty.css">
	<link rel="stylesheet" type="text/css" href="styles/chosen.min.css">




	<script type="text/javascript" src="scripts/jquery.min.js"></script>

    <link rel="shortcut icon" href="assets/favicon.ico">
</head>
<body>

		<div class="navbar navbar-default" role="navigation">
		        <div class="navbar-inner">
		           <a class="navbar-brand" href="index.php"><span><strong> Mall Manager</strong></span></a>

		            <div class="nav navbar-nav pull-right">
		            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
		            	<li><a href="logic/logout.php"><i class="glyphicon glyphicon-globe"></i> Kill session </a></li>
		                <li><a href=""><i class="glyphicon glyphicon-globe"></i> Manage Your Businesses Remotely</a></li>
		                <li><a href=""><i class="glyphicon glyphicon-home"></i> Product of Sir Stark Technologies</a></li>
		            </ul>
		            </div>            

		            <ul class="nav navbar-nav top-menu">
		                <li><a href="index.php?page=login"><i class="glyphicon glyphicon-lock"></i> Login is Required to gain full access</a></li>
		            </ul>

		        </div>	
		</div>

<div class="ch-container">
	<?php
        if (!isset($_GET['page'])) {
            include("login.php");
        }else{
            $page=$_GET['page'];
            include("$page.php");
        }
	?>
</div>	

	<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="scripts/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.noty.js"></script>
	<script type="text/javascript" src="scripts/charisma.js"></script>
	<script type="text/javascript" src="scripts/jquery.cookie.js"></script>
	<script type="text/javascript" src="scripts/jquery.history.js"></script>


</body>
<?php } ?>