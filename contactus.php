<?php
include ("include/restrict.php");
?>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<meta name="viewport" content="width=device-width, initia-scale 1.0, user-scalable=0">

<script src="scripts/jquery.js"></script>
<script src="scripts/general.js"></script>
<!-- copy/paste start -->
	<link rel="stylesheet" href="contact-form/assets/styles/select2.css">
	<link rel="stylesheet" href="contact-form/assets/styles/contact.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="contact-form/assets/js/select2.min.js"></script>
	<script src="contact-form/assets/js/contact.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<!-- copy/paste end -->
</head>

<body>
	<div id="header">
	<div class="logo"><a href="index.php">PC<span>Repair</span></div>
</div>
<div id="container">
<div class="sidebar">
<ul id="nav">
<br/><li><a class="selected" href='index.php'><br><img src="images/home.png">&nbsp;Homepage</a></li>
<li><a href='newrepair.php'><br><img src="images/repair.png">&nbsp;New repair</a></li>
<li><a href='editrepair.php'><br><img src="images/edit.png">&nbsp;Edit a repair</a></li>
<li><a href='editmanufacturer.php'><br><img src="images/manu.png">&nbsp;Add/Edit Manufacturer</a></li>
<li><a href='editsuppliers.php'><br><img src="images/supplier.png">&nbsp;Add/Edit Suppliers</a></li>
<li><a href='editparts.php'><br><img src="images/cog.png">&nbsp;Add/Edit Parts</a></li>
</ul>
</div>
<br/>
<div class="content">

<!-- copy/paste start -->
<br/>
		<form action="contact-form/process.php" enctype="multipart/form-data" method="POST" name="contact" id="contact" class="ucf">
			<div class="message"></div>
			<fieldset>
				<legend>Please provide your details below</legend>

				<p class="field-wrapper">
					<label for="name" accesskey="U">
						<span class="required">Your Name</span>
						<input class="field" type="text" name="name" id="name" size="30" required>
					</label>
				</p>

				<p class="field-wrapper">
					<label for="email" accesskey="E">
						<span class="required">Email</span>
						<input class="field" type="email" name="email" id="email" size="30" placeholder="you@youremail.com" required>
					</label>
				</p>

				<p class="field-wrapper">
					<label for="phone" accesskey="P">
						<span class="required">Phone</span>
						<input class="field" type="tel" name="phone" id="phone" size="30" required>
					</label>
				</p>

				<p class="field-wrapper">
					<label for="subject" accesskey="S">
						<span class="required">Subject</span>
						<select class="field" name="subject" id="subject" required>
							<option value="">Select one</option>
							<option value="support">Support</option>
							<option value="sales">Sales</option>
							<option value="bugs">Report a bug</option>
						</select>
					</label>
				</p>

				<p class="field-wrapper">
					<label for="message" accesskey="M">
						<span class="required">Message</span>
						<textarea class="field" name="message" id="message" cols="40" rows="3" required></textarea>
					</label>
				</p>

				<p class="field-wrapper">
					<label for="attachment" accesskey="F">
						<span class="required">Upload a file</span>
						<input class="field" type="file" name="attachment[]" id="attachment" multiple>
					</label>
				</p>

				<!-- Google reCAPTCHA -->
				<!-- change YOUR_SITE_KEY with your google recaptcha key -->
				<!-- https://developers.google.com/recaptcha/docs/start -->
				<div id="g-recaptcha" class="g-recaptcha" data-sitekey="6Lde6hcTAAAAABkfo2xrHYDxck24k5R9eCfPdJ2k" data-expired-callback="recaptchaCallback"></div>
				<noscript>
					<div style="width: 302px; height: 352px;margin-bottom:20px;margin-left:100px;">
						<div style="width: 302px; height: 352px; position: relative;">
							<div style="width: 302px; height: 352px; position: absolute;">
								<!-- change YOUR_SITE_KEY with your google recaptcha key -->
								<iframe src="https://www.google.com/recaptcha/api/fallback?k=6Lde6hcTAAAAABkfo2xrHYDxck24k5R9eCfPdJ2k" style="width: 302px; height:352px; border-style: none;">
								</iframe>
							</div>
							<div style="width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0px; padding: 0px; right: 25px;">
								<textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 80px; border: 1px solid #c1c1c1; margin: 0px; padding: 0px; resize: none;"></textarea>
							</div>
						</div>
					</div>
				</noscript>

				<!-- honeypot -->
				<p class="field-wrapper hey-honey">
					<label for="honey">
						Please leave this field empty - we're using it to stop robots submitting the form<br>
						<input class="field" type="text" name="honey" id="honey">
					</label>
				</p>

				<button type="submit" class="button primary">Send details</button>

			</fieldset>
		</form>
		<!-- copy/paste end -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2356.757168875213!2d-2.2501612845850967!3d53.79380938007518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b972faf6a13ef%3A0x9389f742160750da!2sBurnley+College!5e0!3m2!1sen!2suk!4v1455102910865" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
 </div>

</div>
</div>
</body>
<footer>
Test.
</footer>
</html>