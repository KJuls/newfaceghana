<!DOCTYPE html>
<html>
<head>
	<title>NewFace Ghana Foundation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Main Stylesheet-->
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="common/js/jquery.min.js">
	<script>
            /* When the user clicks on the button,
             toggle between hiding and showing the dropdown content */

            $(document).ready(function () {

                $("a.dropdown-link").click(function (e) {
                    e.preventDefault();
                    var $div = $(this).data('container');
                    $div = $('#' + $div);
                    $(".dropdown-boxes").not($div).hide();
                    $($div).toggle();
                });

                $(document).on('click', function (e) {
                    if ($(e.target).closest(".app-header").length === 0) {
                        $(".dropdown-boxes").hide();
                    }
                });

            });

// Close the dropdown if the user clicks outside of it
            window.onclick = function (event) {

                document.getElementById("app-notification").classList.remove("show");
                document.getElementById("user-functions").classList.remove("show");
                document.getElementById("userNav").classList.remove("show");
            }

        </script>
</head>
<body class="app-main">
	<header class="app-header">
		<img src="imgs/newface-logo-mob3.png">
		<span class="pop-nav">
			<a href=""><i class="fa fa-navicon"></i></a>
		</span>
	</header>
	<section class="app-body">
		<section class="side-bar">
			<div class="side-bar-area">
				<div class="nav-container">
    			<div class="app-logo">
			<a href="#"><img src="imgs/newface-logo.png" alt="NewFace Ghana Foundation Logo"></a>
			</div>
			<ul class="nav-helper">
				<li><a href="#">Home</a></li>
				<li><a href="#">Our Vision</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Get Invloved</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<div class="social-media">
      <a href="facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
			<a href="instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a href="twitter.com"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
			</div>
    </div>
    </div>
		</section>
		<main class="app-content">

		<h3>lorem</h3>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>

		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</main>
	</section>
</body>
</html>
