<?php
	$pagename = "Contact";
	include("header-inc.php");
?>
		<main class="app-content">

		<h1>Contact Us</h1>
		<h3>
			We will be happy to hear from you! For questions related to our corporate functions, including media and investor relations, please see below.
		</h3>
		<form class="loopui-form" method="post" action="#">
			<!-- <div class="form-item stacked">
				<div>
					<label>First Name</label>
					<input type="text" value="" />
				</div>
				<div>
					<label>Last Name</label>
					<input type="text" value="" />
				</div>
			</div>
			<div class="form-item stacked">
				<div>
					<label>Email</label>
					<input type="email" value="" />
				</div>
				<div>

				</div>
			</div>
			<div class="form-item stacked">
				<div>
					<label>Message</label>
					<textarea name="message" value="" height="100px"></textarea>
				</div>
				<div>

				</div>
			</div> -->

			<div class="loopui-form-stacked">
				<label>Full Name</label>
				<input type="text" name="full-name" />
			</div>

			<div class="loopui-form-stacked">
				<label>Email Address</label>
				<input type="text" name="email" />
			</div>
			<div class="loopui-form-stacked">
				<label>Message</label>
				<textarea name="message" rows="6"></textarea>
			</div>
			<div class="loopui-form-stacked">
				<button type="submit" value="Submit" class="submit-btn">Submit</button>
			</div>


		</form>

		</main>
	</section>
</body>
</html>
