<?php require "header.php" ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-5 bg-info left">
			<h1 class="font-weight-bolder">Get in Touch</h1>
			<p>I'm a paragraph. Click here to add <br> your own text and edit me.</p>
			<p>Address. 500 Terry Francois Street <br> San Francisco, CA 94158</p>
			<p>Email. info@mysite.com <br> Phone. 123-456-7890</p>
		</div>
		<div class="col-md-7 text-center right pt-5">
			<form>
				<input type="text" name="firstname" placeholder="First Name" class="form font-weight-light" style="width: 250px;">
				<input type="text" name="lastname" placeholder="Last Name" class="form font-weight-light" style="width: 250px;"><br>
				<input type="text" name="email" placeholder="Email" class="form font-weight-light" style="width: 250px;">
				<input type="text" name="subject" placeholder="Subject" class="form font-weight-light" style="width: 250px;"><br>
				<input type="text" name="message" placeholder="Type your message here" class="forms font-weight-light position-relative" style="width: 250px;"><br>
				<input type="submit" name="submit" class="btn btn-info submits" value="Submit">
			</form>
		</div>
	</div>
</div>

<?php require "footer.php" ?>