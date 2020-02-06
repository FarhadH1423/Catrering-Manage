		<div class="row footer">
			<div class="col-md-12">
				<div class="row inner_footer">
					<div class="col-md-4 quick_links">
						<h3>Quick Links</h3>
						<ul>
							<li <?php if($page=="index") echo 'class="active"' ?>><a href="index.php">Home</a></li>
							<li <?php if($page=="aboutus") echo 'class="active"' ?>><a href="about_us.php">About us</a></li>
							<li <?php if($page=="arts") echo 'class="active"' ?>><a href="arts.php">Arts</a></li>
							<li <?php if($page=="contact_us") echo 'class="active"' ?>><a href="contact_us.php">Reach us</a></li>
						</ul>
					</div>
					<div class="col-md-4 email_subscriber">
						<h3>Registration</h3>
            <h3>Login</h3>
            <h3>Packages</h3>
            <h3>Registration</h3>
					</div>

					<div class="col-md-4 email_subscriber2">
		       <h4> Contact with Us</h3>
						<h4>Team Advil</h4>
						<h4>01779002301</h4>
						<h4>TeamAdvil@gmail.com</h4>
						<h4>Sector 10, Uttara, Dhaka, Bangladesh</h4>
					</div>
				</div>
				<div class="row copyright_tag">
					<div class="col-md-12">
						<h4>Copyright &copy; Team Advil</a></h4>
					</div>
				</div>
			</div>
		  </div>
		</div>
	<?php
			require_once('Admin/dbconclose.php');
	?>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>  
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>