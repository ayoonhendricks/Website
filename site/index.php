<?php
echo '
<html>
	<head>
		<title>Blue and Gold Yearbook</title>
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
		<section class="intro" style="background:url(\'images/index-01.png\') #333 no-repeat center; background-size:cover">
			<div class="wrap">
				<h1 class="title">Let\'s talk 
					<span class="alternating">
						<span class="s">memories</span>
						<span>memories</span>
						<span>memories</span>
					</span>.
				</h1>
				<a class="button" href="store">Buy a Yearbook</a>
				<p class="byline">Are you a <a href="group">student group</a>? A <a href="portrait">senior</a>? A <a href="store">Yearbook-swag</a>-seeking shopper?
			</div>
		</section>
		<section class="text">
			<div class="wrap">
				<h2>Telling Stories. Your Stories.</h2>
				<div class="copy">
					<p>The Blue &amp; Gold Yearbook is the official yearbook for the University of California, Berkeley. Published since 1875, we provide readers coverage of events, issues and trends within the Berkeley community.</p>
					<p class="light"><a href="about">read more</a></p>
				</div>
			</div>
		</section>
		<section class="text bg" style="background:url(\'images/index-02.png\') #333 no-repeat center; background-size:cover">
			<div class="wrap">
				<h2>Preview <b>your</b> yearbook.</h2>
				<div class="copy">
					<p>Want to preview the Yearbook before purchasing?  Here are some sample spreads from the 2012 Yearbook, Anatomy of a Golden Bear.</p>
					<a class="button" href="#">View Spreads</a>
				</div>
			</div>
		</section>
		<section class="text">
			<div class="wrap">
				<h2>Personalize your book.</h2>
				<div class="items">
					<div class="item">
						<h3>senior portrait</h3>
						<a class="button inverted" href="#">Make Appointment</a>
					</div>
					<div class="item">
						<h3>student group</h3>
						<a class="button inverted" href="#">Send Information</a>
					</div>
					<div class="item">
						<h3>coverage idea</h3>
						<a class="button inverted" href="#">Tell the Story</a>
					</div>
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