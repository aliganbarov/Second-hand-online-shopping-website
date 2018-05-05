<html>
<head>
	<title></title>
	 <!-- Latest compiled and minified CSS -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	 <!-- jQuery library -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	 <!-- Latest compiled JavaScript -->
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	 <script src="/public/js/add_product_select_list.js"></script>

	<!-- Font Awesome -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
	<body>
	<?php
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
	require_once('nav.php');
	?>	

