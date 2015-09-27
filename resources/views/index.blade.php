<!DOCTYPE HTML>
<html>
	<head>
		<title>RFid</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/maincss.css" />
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="index.html">RFID Product Info</a></h1>
				<a href="index.html">Information</a>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">About us</a></li>
					<li><a href="elements.html">Contact us</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<i class="icon fa-barcode"></i>
				<h2>Product Detail</h2>
				<div class="container">
					<table class="table table-hover" style="background-color: #1E2832;">
						<thead>
							<th align="center" >Manufacturing Date</th>
							<th>Expire Date</th>
							<th>Batch</th>
							<th>Status</th>
						</thead>
						<tbody>
						@foreach($users as $user)
							<tr>
								<td>{{ $user->Mfg }}</td>
								<td>{{ $user->ExpD }}</td>
								<td>{{ $user->Batch }}</td>
								<td>{{ $user->Status }}</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>



			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
						<div class="content">
							<h2>RFID Feature</h2>
							<p>Detail feature</p>
							<ul class="actions">
								<li>
									<a href="#" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature right">
						<span class="image"><img src="images/pic02.jpg" alt="" /></span>
						<div class="content">
							<h2>RFID Feature</h2>
							<p>Detail feature</p>
							<ul class="actions">
								<li>
									<a href="#" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>RFID in Detail</h2>
						<p>Description</p>
					</header>
					<div class="image-grid">
						<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic10.jpg" alt="" /></a>
					</div>
					<ul class="actions">
						<li><a href="#" class="button big alt">More</a></li>
					</ul>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
						<h2>Another section</h2>
						<p>Description</p>
					</header>
					<ul class="actions">
						<li><a href="#" class="button big alt">More</a></li>
					</ul>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Get in touch</h2>
						<p>Leave your Comment</p>
					</header>
					<form action="#" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Name" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Email" type="email" />
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Message" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Submit" /></li>
							<li><input type="reset" class="alt" value="Reset" /></li>
						</ul>
					</form>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled.</li>
						<li>Images: <a href="http://inspireitl.com">Inspire RFID</a>.</li>
						<li>Design: <a href="http://facebook.com/sifat.oshan">AIMS lab Member</a>.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="js/main.js"></script>

	</body>
</html>