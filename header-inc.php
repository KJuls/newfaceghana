<!DOCTYPE html>
<html>
<head>
	<title>NewFace Gh - <?=$pagename?></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Main Stylesheet-->
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<script>
function openNav() {
    document.getElementById("side-nav").style.width = "100%";
}

function closeNav() {
    document.getElementById("side-nav").style.width = "0";
}
</script>
<body class="app-main">
	<header class="app-header">
		<img src="imgs/newface-logo-mob3.png">

		<span class="pop-nav">
			<i class="fa fa-navicon" onclick="openNav()"></i>
		</span>

		<div id="side-nav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="index.php">Home</a>
		  <a href="our-vision.php">Our Vision</a>
		  <a href="gallery.php">Gallery</a>
		  <a href="get-involved.php">Get Involved</a>
			<a href="contact.php">Contact</a>
			<span class="social-media-mob">
      <a href="https://facebook.com/newfaceghanafoundation/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
			<a href="instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a href="twitter.com"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
			<a href="gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>
			</a>
			</span>
		</div>

	</header>
	<section class="app-body">
		<section class="side-bar">
			<div class="side-bar-area">
				<div class="nav-container">
    			<div class="app-logo">
			<a href="#"><img src="imgs/newface-logo.png" alt="NewFace Ghana Foundation Logo"></a>
			</div>
			<ul class="nav-helper">
				<li><a href="index.php">Home</a></li>
				<li><a href="our-vision.php">Our Vision</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="get-involved.php">Get Invloved</a></li>
				<li><a href="contacts.php">Contact</a></li>
			</ul>

			<div class="social-media">
      <a href="https://facebook.com/newfaceghanafoundation/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
			<a href="instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a href="twitter.com"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
			<a href="gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>
			</a>
			</div>
    </div>
    </div>
		</section>
