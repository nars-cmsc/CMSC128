<?php require_once 'controller.php'; ?>

  <head>    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="images/png" href="images/UP_seal.png">	
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body{
			height: 100%;
			font-family: Arial Nova, sans-serif;
			font-size: 16pt;
			background-color: #fff;
			margin:0;
		}
		header{
			z-index: 2;
			position: fixed;
			background-image: linear-gradient(to right, #840038, #385723);
			padding-bottom: 1%;
			padding-top: 1%;
			width: 100%;
			top: 0;
		}
		/* added this so that size of header will change
			once window is resized */
		.container-header {
			position: fixed;
			min-height: 100vh;
		}
		.logos img {
			position: relative;
			width: 4.5rem;
			height: 4.5rem;
			float: left;
		}
		/* added this to personalize the padding of each logo*/
		#up {
			padding-left: 2%;
			padding-right: .5%;
		}
		#cs {
			padding-right: .5%;
			padding-left: .5%;
		}
		.banner_lines {
			float: left;
			width: 82%;
		}
		.banner_lines h3, h4, h6{
			color: #fff;
			margin: 0;
			margin-left: 1%;
			text-transform: uppercase;
		}
		.log_out img {
			float:right;
			width:25px;
			height:25px;
			padding-right: 1.1%;
			padding-top: 2%;
			opacity:.7;
		}
		.log_out img:hover {
			opacity:1.0;
		}
	</style>
	
	</head>
<body>
	<div class="header-container">
	<header>
		<div class = "logos">
			<img src = "images/UP_seal.png" id="up">		
			<img src = "images/CS_logo.png" id="cs">	
		</div>		
		<div class = "banner_lines">	
			<h3>Department of Mathematics and Computer Science</h3>
			<h4>College of Science</h4>
			<h6>University of the Philippines Baguio</h6>
		</div>
		<div class="log_out">
			<a href="header.php?logout=1" class="logout"><img src = "images/logout.png"></a>
		</div>
	</header>
	</div>