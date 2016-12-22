<?php require('functions.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Mahendra Kanban Board</title>
	<link href="template/css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<style>
		.item, #board{display: none}
		.item, .item a{color: #fff}
		nav {background-color: #303F9F; clear: both; width: 100%; min-height: 40px; line-height: 40px; margin-bottom: 8px}
		nav ul li{float: left; list-style: none}
		nav ul li a{padding: 10px 20px; line-height: 1.3em; color: #fff; text-decoration: none; display: block}
		nav ul li a:hover{background-color: #448AFF}
		section, header,footer {clear: both}
	</style>
<script>
$(document).ready(function(){
	$(".loading").append("Loading content..");
	$("#board").delay(1000).fadeIn(1000);
	$("#content").delay(1000).fadeIn(1000);
	$(".item").delay(2500).slideDown(1000);
	var tId;
	clearTimeout(tId);
	tId = setTimeout(function(){
		$(".loading").slideUp("slow");        
	}, 3500);
});
</script>
</head>
<body>
<header>

</header>
<nav>
	<ul>
		<li><a href="../kanban">Home</a></li>
		<li><a href="cat.php?cid=1">Homework</a></li>
		<li><a href="cat.php?cid=2">Projects</a></li>
		<li><a href="account.php?uid=1">My Profile</a></li>
		<li><a href="#">Setting</a></li>
	</ul>
</nav>
<div class="loading"></div>