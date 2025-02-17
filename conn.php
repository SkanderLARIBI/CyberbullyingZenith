<!DOCTYPE HTML> 
<html>
	<head>
		<title>Zenith_Log-in</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Panel (Banner) -->
							<section class="panel banner right">
								<div class="content color0 span-3-75">
								<p style="color:#00000;"><?php if( isset($_GET['error'])){echo $_GET['error'];} ?></p>
									<form method="post" action="code/log-in.php">
										<div class="field">
											<label for="name">Username</label>
											<input type="text" name="username" id="username" />
										</div>
										<div class="field">
											<label for="name">Password</label>
											<input type="password" name="password" id="password" />
										</div>
										<ul class="actions">
											<li><input type="submit" value="Log-in" class="button special" /></li>
										</ul>
										
									</form>
								</div>
								<div class="image filtered span-1-75" data-position="25% 25%">
									<img src="images/pic01.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color4-alt">
								<div class="intro color4">
									<div class="span-1-5">
										<ul class="contact-icons color1">
											<li class="icon fa-twitter"><a href="https://twitter.com/ZenithTEAM_">@ZenithTEAM_</a></li>
											<li class="icon fa-facebook"><a href="https://www.facebook.com/profile.php?id=100088078523668&mibextid=ZbWKwL">facebook.com/Zénith_Team</a></li>
											<li class="icon fa-instagram"><a href="https://www.instagram.com/zenith.team.2022/?fbclid=IwAR0DabyoLngBXT3KqwQZOcm4n7EV-75aZbUIxYKVEJHQiFqnh7nbBW3Yrpk">Zénith</a></li>
											<li class="icon fa-medium"><a href="mailto:zenith.depot.groupe@gmail.com">zenith.depot.groupe</a></li>
											<li class="icon fa-phone"><a href="#">80.255.300</a></li>
										</ul>
									</div>
								</div>
							</section>

						
						<!-- Copyright -->
							<div class="copyright">&copy; Groupe of zenith.</div>

					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
