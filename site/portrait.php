<?php
echo '
<html>
	<head>
		<title>Portrait | Blue and Gold Yearbook</title>
		<link href="style.css" rel="stylesheet">
		<link href=\'http://fonts.googleapis.com/css?family=Lato:100,300,400,700\' rel=\'stylesheet\' type=\'text/css\'>
		<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<h1><a href="/"><img src="images/logo.png"><span>Blue and Gold Yearbook</span></a></h1>
			<nav>
				<ul>
					<li><a href="group">group</a></li>
					<li><a href="portrait">portrait</a></li>
					<li><a href="store">store</a></li>
					<!-- <li><a href="#">book</a></li> -->
					<li class="trigger">
						<a href="#">menu
							<span class="box">
								<span class="bar"></span>
								<span class="bar"></span>
								<span class="bar"></span>
							</span>
						</a>
					</li>
				</ul>
			</nav>
		</header>
		<div class="nav">
			<img src="images/logo.png">
			<nav>
				<ul>
					<li><b><a href="/">home</a></b></li>
					<li><b><a href="group">group</a></b></li>
					<li><b><a href="portrait">portrait</a></b></li>
					<li><b><a href="store">store</a></b></li>
					<li><a href="faq">FAQ</a></li>
					<li><a href="about">About</a></li>
					<li><a href="mailto:info@yearbook.berkeley.edu">contact</a></li>
				</ul>
			</nav>
		</div>
		<section class="intro" style="background:url(\'images/portrait-01.png\') #333 no-repeat center; background-size:cover">
			<div class="wrap">
				<h1 class="title">Get your <span>portrait</span>.</h1>
				<!-- <p class="byline">Are you a <a href="#">student group</a>? A <a href="#">senior</a>? A <a href="#">Yearbook-swag</a>-seeking shopper? -->
			</div>
		</section>
		<a href="http://www.laurenstudios.photos/college-seniors/" class="banner">
			<p>Set up an appointment today <span class="arrow right"><span class="leg"></span></span></p>
		</a>
		<section class="text">
			<div class="wrap">
				<h2>Senior Portraits Photo</h2>
				<div class="copy">
					<p>Get pictured in the 2015 Yearbook by <a href="http://www.laurenstudios.photos/college-seniors/">making an appointment</a>. Make sure to check your email for your Lauren Studios client ID!</p>
				</div>
			</div>
		</section>
		<footer>
			<div class="logo">
				<div class="clear">
					<img src="images/logo.png">
				</div>
				<h2>Blue and Gold Yearbook</h2>
				<p class="links"><a href="about">about</a> . <a href="mailto:info@yearbook.berkeley.edu">contact</a></p>
			</div>
		</footer>
	</body>
</html>';
exit;
?>